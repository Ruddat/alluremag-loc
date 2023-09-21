<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use App\Models\Category;
use App\Models\NewsPost;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Subcategory;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\NewsPostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\NewsPostResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class NewsPostResource extends Resource
{
    protected static ?string $model = NewsPost::class;

    protected static ?string $navigationIcon = 'heroicon-m-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                ->options(Category::query()->pluck('category_name', 'id'))
                ->live(),

                Select::make('subcategory_id')
                ->options(fn (Get $get): Collection => Subcategory::query()
                ->where('category_id', $get('category_id'))
                ->pluck('subcategory_name', 'id')),


                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('news_title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('news_title_slug')
                    ->required()
                    ->maxLength(255),

                TinyEditor::make('news_details')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('admin-uploads')
                    ->fileAttachmentsVisibility('public'),

                SpatieMediaLibraryFileUpload::make('fotos')
                    ->image()
                    ->collection('slider')
                    //->enableReordering()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) str($file->getClientOriginalName())->prepend('alluremag-');
                    })->reactive(),

                Forms\Components\Textarea::make('tags')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('breaking_news')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('top_slider')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('first_section_three')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('first_section_nine')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('post_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('post_month')
                    ->required()
                    ->maxLength(255),


                Forms\Components\TextInput::make('status')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category_id', 'category_name')
                ->sortable()
                ->rowIndex(),

                Tables\Columns\TextColumn::make('category_id', 'name')
                    ->sortable(),

                    Tables\Columns\TextColumn::make('subcategory_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                    IconColumn::make('slider')
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'info',
                        'reviewing' => 'warning',
                        'published' => 'success',
                        default => 'gray',
                    }),
                SpatieMediaLibraryImageColumn::make('fotos')
                    ->collection('slider')
                    ->conversion('feature-post-thumb')
                    ->width(140)
                    ->height(80),

                TextColumn::make('author.name'),
                Tables\Columns\TextColumn::make('news_title')
                    ->sortable()
                    ->searchable()
                    ->limit(10)
                    ->tooltip(fn (Model $record): string => "By {$record->news_title}"),


                Tables\Columns\TextColumn::make('news_title_slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('breaking_news')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('top_slider')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_section_three')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_section_nine')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('post_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('post_month')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsPosts::route('/'),
            'create' => Pages\CreateNewsPost::route('/create'),
            'edit' => Pages\EditNewsPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
