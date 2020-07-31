<?php

use Illuminate\Database\Seeder;

class BeaconsInteractionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // interactions for 2020-05-26 10:00:00
        // beacon 1 has no interactions

        // beacon 2 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 6,
            'duration' => 24,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 8,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 9,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 11,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 14,
            'duration' => 20,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 15,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
// beacon 3 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 2,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 6,
            'duration' => 20,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 8,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 11,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 13,
            'duration' => 84,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 14,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 4 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 2,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 3,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 6,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 8,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 11,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 13,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 14,
            'duration' => 16,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 5 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 6 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 2,
            'duration' => 24,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 3,
            'duration' => 20,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 11,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 12,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 13,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 14,
            'duration' => 28,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        // beacon 7 has no interactions

        // beacon 8 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 1,
            'duration' => 16,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 2,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 3,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 9,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 10,
            'duration' => 24,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 11,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 13,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 14,
            'duration' => 32,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 8,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 9 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 2,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 3,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 6,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 8,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 11,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 14,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 10 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 1,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 6,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 8,
            'duration' => 24,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 11,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 13,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 14,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 11 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 2,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 6,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 8,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 9,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 10,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 14,
            'duration' => 180,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 12 has no interactions

        // beacon 13 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 2,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 3,
            'duration' => 84,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 4,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 6,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 8,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 10,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 11,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 14,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 14 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 2,
            'duration' => 20,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 3,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 4,
            'duration' => 16,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 6,
            'duration' => 28,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 8,
            'duration' => 32,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 10,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 11,
            'duration' => 180,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 15,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // beacon 15 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 2,
            'duration' => 12,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 3,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 4,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 6,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 8,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 11,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 14,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-26 10:00:00',
        ]);

        // interactions for 2020-05-28 10:00:00

        // beacon 1 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 2,
            'duration' => 2320,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 3,
            'duration' => 2544,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 4,
            'duration' => 2044,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 6,
            'duration' => 972,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 9,
            'duration' => 1604,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 10,
            'duration' => 6264,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 11,
            'duration' => 3592,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 13,
            'duration' => 6688,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 14,
            'duration' => 6936,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 1,
            'secondary_beacon_id' => 15,
            'duration' => 6936,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 2 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 1,
            'duration' => 2320,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 3,
            'duration' => 804,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 4,
            'duration' => 1264,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 6,
            'duration' => 1412,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 9,
            'duration' => 2260,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 10,
            'duration' => 7004,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 11,
            'duration' => 9964,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 13,
            'duration' => 2488,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 14,
            'duration' => 2480,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 2,
            'secondary_beacon_id' => 15,
            'duration' => 19052,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 3 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 1,
            'duration' => 2544,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 2,
            'duration' => 804,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 4,
            'duration' => 4476,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 6,
            'duration' => 5472,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 9,
            'duration' => 1888,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 10,
            'duration' => 7400,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 11,
            'duration' => 2132,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 13,
            'duration' => 2580,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 14,
            'duration' => 2724,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 3,
            'secondary_beacon_id' => 15,
            'duration' => 4764,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 4 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 1,
            'duration' => 2044,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 2,
            'duration' => 1264,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 3,
            'duration' => 4476,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 6,
            'duration' => 4560,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 9,
            'duration' => 1724,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 10,
            'duration' => 7692,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 11,
            'duration' => 2820,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 13,
            'duration' => 2704,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 14,
            'duration' => 3476,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 4,
            'secondary_beacon_id' => 15,
            'duration' => 5028,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 5 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 1,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 2,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 9,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 10,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 13,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 14,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 5,
            'secondary_beacon_id' => 15,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 6 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 1,
            'duration' => 972,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 2,
            'duration' => 1412,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 3,
            'duration' => 5472,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 4,
            'duration' => 4560,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 9,
            'duration' => 2796,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 10,
            'duration' => 7448,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 11,
            'duration' => 3832,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 13,
            'duration' => 3192,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 14,
            'duration' => 3544,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 6,
            'secondary_beacon_id' => 15,
            'duration' => 5868,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 9 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 1,
            'duration' => 1604,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 2,
            'duration' => 2260,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 3,
            'duration' => 1888,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 4,
            'duration' => 1724,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 6,
            'duration' => 2796,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 10,
            'duration' => 3344,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 11,
            'duration' => 2400,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 13,
            'duration' => 2996,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 14,
            'duration' => 2912,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 9,
            'secondary_beacon_id' => 15,
            'duration' => 5324,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 10 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 1,
            'duration' => 6264,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 2,
            'duration' => 7004,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 3,
            'duration' => 7400,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 4,
            'duration' => 7692,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 5,
            'duration' => 8,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 6,
            'duration' => 7448,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 9,
            'duration' => 3344,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 11,
            'duration' => 10136,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 13,
            'duration' => 7124,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 14,
            'duration' => 10184,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 10,
            'secondary_beacon_id' => 1,
            'duration' => 19688,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 11 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 1,
            'duration' => 3592,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 2,
            'duration' => 9964,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 3,
            'duration' => 2132,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 4,
            'duration' => 2820,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 6,
            'duration' => 3832,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 9,
            'duration' => 2400,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 10,
            'duration' => 10136,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 13,
            'duration' => 4268,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 14,
            'duration' => 4452,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 11,
            'secondary_beacon_id' => 15,
            'duration' => 20300,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 13 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 1,
            'duration' => 6688,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 2,
            'duration' => 2488,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 3,
            'duration' => 2580,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 4,
            'duration' => 2704,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 6,
            'duration' => 3192,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 9,
            'duration' => 2996,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 10,
            'duration' => 7124,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 11,
            'duration' => 4268,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 14,
            'duration' => 8224,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 13,
            'secondary_beacon_id' => 15,
            'duration' => 5912,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 14 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 1,
            'duration' => 6936,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 2,
            'duration' => 2480,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 3,
            'duration' => 2724,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 4,
            'duration' => 3476,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 6,
            'duration' => 3544,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 9,
            'duration' => 2912,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 10,
            'duration' => 10184,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 11,
            'duration' => 4452,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 13,
            'duration' => 8224,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 14,
            'secondary_beacon_id' => 15,
            'duration' => 4284,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);

        // beacon 15 interactions
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 1,
            'duration' => 6936,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 2,
            'duration' => 19052,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 3,
            'duration' => 4764,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 4,
            'duration' => 5028,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 5,
            'duration' => 4,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 6,
            'duration' => 5868,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 9,
            'duration' => 5324,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 10,
            'duration' => 19688,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 11,
            'duration' => 20300,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 13,
            'duration' => 5912,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
        App\BeaconsInteractions::create([
            'primary_beacon_id' => 15,
            'secondary_beacon_id' => 14,
            'duration' => 4284,
            'distance' => 2,
            'interaction_time' => '2020-05-28 10:00:00',
        ]);
    }
}
