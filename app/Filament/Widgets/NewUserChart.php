<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class NewUserChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected static ?string $heading = 'Chart';

    protected static ?string $subheading = 'New Users';

    protected static ?string $pollingInterval = null;

    protected static string $color = 'success';


    protected function getData(): array
    {
        $data = Trend::model(User::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();

    return [
        'datasets' => [
            [
                'label' => 'News Posts',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];

    }

    protected function getType(): string
    {
        return 'line';
    }



}
