<?php

use Illuminate\Database\Seeder;

class LocationHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // beacon 01 location history
        App\LocationHistory::create([
            'beacon_id' => 1,
            'gateway_id' => 1,
            'duration' => 60,
            'location_time' => '2020-05-11 00:37:50',
        ]);
        App\LocationHistory::create([
            'beacon_id' => 1,
            'gateway_id' => 1,
            'duration' => 60,
            'location_time' => '2020-05-11 00:38:50',
        ]);

        // beacon 02 location history
        App\LocationHistory::create([
            'beacon_id' => 2,
            'gateway_id' => 1,
            'duration' => 120,
            'location_time' => '2020-05-11 00:37:50',
        ]);

        // beacon 03 location history
        App\LocationHistory::create([
            'beacon_id' => 3,
            'gateway_id' => 2,
            'duration' => 80,
            'location_time' => '2020-05-11 00:37:50',
        ]);

        // beacon 04 location history
        App\LocationHistory::create([
            'beacon_id' => 4,
            'gateway_id' => 3,
            'duration' => 80,
            'location_time' => '2020-05-11 00:37:50',
        ]);
    }
}
