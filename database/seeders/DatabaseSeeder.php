<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\User;
use App\Models\Attendee;
use App\Models\Event;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(10)->create();

        $this->call([
            EventSeeder::class,
            AttendeeSeeder::class,
        ]);
        

        // User::factory(10)->create()->each(function (User $user){
        //     Event::factory(rand(1,3))->create(['user_id' => $user->id]);
        // });

        // $users = User::all();
        // $events = Event::all();

        // for($i = 0 ; $i < 10; $i++){
        //     $current_user = $users[$i];
        //     $current_event = $events->random();
        //     Attendee::create(['user_id' => $current_user->id, 'event_id' => $current_event->id]);
        // }

    }
}
