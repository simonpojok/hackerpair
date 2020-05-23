<?php

use Illuminate\Database\Seeder;
use App\Event;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('events') -> truncate();
        Event::create([
            'name' => "Laravel and Coffee",
            'city' => "Dublin",
            'venue' => "Cup of Joe",
            "description" => "Let's learn Laravel together"
        ]);

    }
}
