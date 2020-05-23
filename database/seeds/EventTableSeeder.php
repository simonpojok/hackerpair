<?php

use Illuminate\Database\Seeder;
use App\Event;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('events') -> truncate();
        $faker = \Faker\Factory::create();

        foreach (range(1, 50) as $index) {
            Event::create([
                'name' => $faker -> sentence(2),
                'city' => $faker -> city,
                'venue' => $faker -> company,
                "description" => $faker -> paragraph(1, true)
            ]);
        }

    }
}
