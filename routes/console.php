<?php

use App\Console\Commands\MonthlyContentUpdateReminder;
use App\Console\Commands\SendAutoEmailsCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command(MonthlyContentUpdateReminder::class)->monthlyOn(28, '08:00');
