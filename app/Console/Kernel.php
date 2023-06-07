<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use App\Console\Commands\CampaignRefresh;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        CampaignRefresh::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $interval =  DB::table('campaign_time_schedules')->value('minutes'); 
       // Replace with your interval

        $new_interval = (int)$interval;
        
        $schedule->command('command:Refreshcampaign')->everyNMinutes($new_interval);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}


//let suppose we have a page where we insert time in minute and another page where data would be updated from data base after time (we already get at the begining of the stament) I want to ge this by the help of crone jobs . how i write it in laravel