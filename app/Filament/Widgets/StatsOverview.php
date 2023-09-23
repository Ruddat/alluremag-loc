<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{


    protected static ?int $sort = 1;

    protected static ?string $pollingInterval = '5000';

    protected function getStats(): array
    {
        return [
            //
            Stat::make('Total Customer', \App\Models\User::count())
            ->description('Increase in Customer')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color ('success')
            ->chart([7, 3, 5, 7, 4, 3, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]),
                //->primary()
               // ->icon('heroicon-o-user-group')
               // ->count(\App\Models\User::count())
               // ->view('filament.widgets.stats-overview.stat'),
               Stat::make('Total News', \App\Models\NewsPost::count()),

               Stat::make('Total News', \App\Models\NewsPost::count())

        ];
    }
}
