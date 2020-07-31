<?php

use Illuminate\Database\Seeder;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Zone::create([
            'name' => 'Embalagem',
            'x_length' => 144,
            'y_width' => 96,
            'z_height' => 3,
        ]);
    }
}
