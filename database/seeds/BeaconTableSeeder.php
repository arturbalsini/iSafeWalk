<?php

use Illuminate\Database\Seeder;

class BeaconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Beacon::create([
            'name' => '16A',
            'serial' => '01:00',
            'deleted_at' => '2020-06-04 17:17:06',
        ]);
        App\Beacon::create([
            'name' => '17A',
            'serial' => '01:01',
            'deleted_at' => '2020-06-04 17:17:11',
        ]);
        App\Beacon::create([
            'name' => '12A',
            'serial' => '01:02',
        ]);
        App\Beacon::create([
            'name' => '5A',
            'serial' => '01:03',
        ]);
        App\Beacon::create([
            'name' => '2A',
            'serial' => '01:04',
        ]);
        App\Beacon::create([
            'name' => '11A',
            'serial' => '01:05',
        ]);
        App\Beacon::create([
            'name' => '14A',
            'serial' => '01:06',
        ]);
        App\Beacon::create([
            'name' => '9A',
            'serial' => '01:07',
        ]);
        App\Beacon::create([
            'name' => '3A',
            'serial' => '01:08',
        ]);
        App\Beacon::create([
            'name' => '8A',
            'serial' => '01:09',
        ]);
        App\Beacon::create([
            'name' => '4A',
            'serial' => '01:0A',
        ]);
        App\Beacon::create([
            'name' => '7A',
            'serial' => '01:0B',
        ]);
        App\Beacon::create([
            'name' => '10A',
            'serial' => '01:0C',
        ]);
        App\Beacon::create([
            'name' => '1A',
            'serial' => '01:0D',
        ]);
        App\Beacon::create([
            'name' => '6A',
            'serial' => '01:0E',
        ]);
    }
}
