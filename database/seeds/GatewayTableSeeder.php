<?php

use Illuminate\Database\Seeder;

class GatewayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Gateway::create([
            'name' => 'Gateway Linha 13',
            'serial' => '0123456789',
            'zone_id' => 1,
            'zone_x' => 64,
            'zone_y' => 42,
        ]);

        App\Gateway::create([
            'name' => 'Gateway Linha 15',
            'serial' => '0123123123',
            'zone_id' => 1,
            'zone_x' => 113,
            'zone_y' => 90,
        ]);

        App\Gateway::create([
            'name' => 'Gateway 03',
            'serial' => '0123123456',
            'zone_id' => 1,
            'zone_x' => 16,
            'zone_y' => 60,
        ]);
    }
}
