<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BeaconTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(ZoneTableSeeder::class);
        $this->call(SectorTableSeeder::class);
        $this->call(GatewayTableSeeder::class);
        $this->call(LocationHistoryTableSeeder::class);
        $this->call(BeaconsInteractionsTableSeeder::class);
    }
}
