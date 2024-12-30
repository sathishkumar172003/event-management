<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        // create 10 events for random users 
        for($i = 0 ; $i < 10; $i++ ){
            $current_user = $users->random();
            Event::factory()->create([
                'user_id' => $current_user->id,
            ]);
        }
    }
}
