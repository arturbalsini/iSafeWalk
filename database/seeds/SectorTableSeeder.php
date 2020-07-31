<?php

use Illuminate\Database\Seeder;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sector::create([
            'name' => 'Linha 19',
            'x_length' => 34,
            'y_width' => 19,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 99,
            'initial_y' => 22,
        ]);

        App\Sector::create([
            'name' => 'Linha 13',
            'x_length' => 34,
            'y_width' => 32,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 37,
            'initial_y' => 7,
        ]);

        App\Sector::create([
            'name' => 'Linha 14',
            'x_length' => 17,
            'y_width' => 31,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 73,
            'initial_y' => 8,
        ]);

        App\Sector::create([
            'name' => 'Linha 20',
            'x_length' => 49,
            'y_width' => 25,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 38,
            'initial_y' => 56,
        ]);

        App\Sector::create([
            'name' => 'Linha 15',
            'x_length' => 34,
            'y_width' => 25,
            'z_height' => 3,
            'zone_id' => 1,
            'initial_x' => 89,
            'initial_y' => 56,
        ]);
    }
}
