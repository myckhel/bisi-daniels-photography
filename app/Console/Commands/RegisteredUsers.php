<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\Event;

class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email of registered users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $totalUsers = \DB::table('users')
                  ->whereRaw('Date(created_at) = CURDATE()')
                  ->count();
        Event::create([
                'event_sdate' => NOW(),
                'event_edate' => NOW("+24 hours")
            ]);
    }

    public function handleServiceUp()
    {
      //get todays day
      $today = strtotime('j s', NOW());

      //fetch services up for creation
      $services = \DB::table('services')->where('sdays', $today.'s')->get();

      //get current date
      $now = NOW();

      // for each services up
      foreach ($services as $key => $service) {
        //get the date of the end day
        $end_date = $service->edays;
        // create its event
        \DB::table('events')->create([
          'service_id' => $service->id,
          'event_sdate' => $now,
          'event_edate' => $end_date.' 23:58:00'
        ]);
      }
    }

    public function handleEventDown()
    {
        //check for expired events
        $expired_events = \DB::table('events')->where('active', 1)->where('event_edate', NOW())->get();
        //disable each expired events
        foreach ($expired_events as $key => $event) {
          // set event not active
          $event->active = 0;
          $event->save();
        }
    }
}
