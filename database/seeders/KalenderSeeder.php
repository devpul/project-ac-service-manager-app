<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kalender;
use Carbon\Carbon;

class KalenderSeeder extends Seeder
{
    public function run(): void
    {
        $baseDate = Carbon::now()->startOfMonth();

        $events = [
            [
                'title' => 'HTML Dasar',
                'start' => $baseDate->copy()->addDays(2)->setTime(20, 0),
                'end'   => $baseDate->copy()->addDays(2)->setTime(22, 0),
            ],
            [
                'title' => 'CSS Dasar',
                'start' => $baseDate->copy()->addDays(4)->setTime(20, 0),
                'end'   => $baseDate->copy()->addDays(4)->setTime(22, 0),
            ],
            [
                'title' => 'Tailwind CSS',
                'start' => $baseDate->copy()->addDays(6)->setTime(20, 0),
                'end'   => $baseDate->copy()->addDays(6)->setTime(22, 0),
            ],
            [
                'title' => 'Laravel Fundamental',
                'start' => $baseDate->copy()->addDays(8)->setTime(19, 30),
                'end'   => $baseDate->copy()->addDays(8)->setTime(22, 0),
            ],
            [
                'title' => 'Project Mini',
                'start' => $baseDate->copy()->addDays(10)->setTime(20, 0),
                'end'   => $baseDate->copy()->addDays(10)->setTime(23, 0),
            ],
        ];

        foreach ($events as $event) {
            Kalender::create($event);
        }
    }
}
