<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('All books in the system')
                ->descriptionIcon('heroicon-o-book-open')
                ->color('primary'),

            Stat::make('Total Authors', Author::count())
                ->description('Registered authors')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success'),
        ];
    }
}
