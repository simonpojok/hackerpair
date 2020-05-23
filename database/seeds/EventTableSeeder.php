<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('events') -> truncate();

        for ($index = 0; $index <= 20; $index++) {
            Event::create([
                'name' => "Laravel and Coffee",
                'city' => "Dublin",
                'venue' => "Cup of Joe",
                "description" => "Let's learn Laravel together"
            ]);
        }

    }
}
