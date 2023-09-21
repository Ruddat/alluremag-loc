<?php

namespace App\Filament\Pages;

use JibayMcs\FilamentTour\Tour\Step;
use JibayMcs\FilamentTour\Tour\Tour;
use JibayMcs\FilamentTour\Tour\HasTour;

class Dashboard extends \Filament\Pages\Dashboard
{


    protected static ?string $title = 'Admin Dashboard';

    use HasTour;
    // ...

    public function tours(): array    {

            return [
                Tour::make('dashboard', [
                    Step::make('step1', 'Welcome to the dashboard', 'This is the dashboard. You can see all the important information here.'),
                    Step::make('step2', 'This is the second step', 'This is the second step. You can see all the important information here.'),
                    Step::make('step3', 'This is the third step', 'This is the third step. You can see all the important information here.'),
                ]),
            ];

        }
}
