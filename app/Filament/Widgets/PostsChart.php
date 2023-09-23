<?php

namespace App\Filament\Widgets;

use App\Models\NewsPost;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class PostsChart extends ChartWidget
{

    protected static ?int $sort = 3;

    protected static ?string $heading = 'Newest Posts';

    protected static string $color = 'info';

    public ?string $filter = 'today';

    protected function getData(): array
    {
        $data = Trend::model(NewsPost::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
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
        return 'bar';
    }


}
