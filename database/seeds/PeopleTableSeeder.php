<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\People::create([
            'name' => 'Jair',
            'email' => 'mail16A@mail.com',
            'status' => 0,
            'birth_date' => '1212-12-12',
            'job_title' => 'Job 16A',
            'beacon_id' => 1,
        ]);
        App\People::create([
            'name' => 'João Silva',
            'email' => 'mail17A@mail.com',
            'status' => 1,
            'birth_date' => '200-02-11',
            'deleted_at' => '2020-06-04 23:44:32',
        ]);
        App\People::create([
            'name' => 'Kelly',
            'email' => 'mail12A@mail.com',
            'status' => 2,
            'birth_date' => '2003-03-12',
            'job_title' => 'Job 12A',
            'beacon_id' => 3,
        ]);
        App\People::create([
            'name' => 'Bruna',
            'email' => 'mail5A@mail.com',
            'status' => 3,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 5A',
            'beacon_id' => 4,
        ]);
        App\People::create([
            'name' => 'Terezinha',
            'email' => 'mail2A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 2A',
            'beacon_id' => 5,
        ]);
        App\People::create([
            'name' => 'Saboya',
            'email' => 'mail11A@mail.com',
            'status' => 0,
            'birth_date' => '2000-06-02',
            'job_title' => 'Job 11A',
            'beacon_id' => 6,
        ]);
        App\People::create([
            'name' => 'Giovane',
            'email' => 'mail14A@mail.com',
            'status' => 0,
            'birth_date' => '2000-01-01',
            'job_title' => 'Job 14A',
            'beacon_id' => 7,
        ]);
        App\People::create([
            'name' => 'Janet',
            'email' => 'mail9A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 9A',
            'beacon_id' => 8,
        ]);
        App\People::create([
            'name' => 'Maria',
            'email' => 'mail3A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 3A',
            'beacon_id' => 9,
        ]);
        App\People::create([
            'name' => 'Wesley',
            'email' => 'mail8A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 8A',
            'beacon_id' => 10,
        ]);
        App\People::create([
            'name' => 'Edmilson',
            'email' => 'mail4A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 4A',
            'beacon_id' => 11,
        ]);
        App\People::create([
            'name' => 'Person 7A',
            'email' => 'mail7A@mail.com',
            'status' => 0,
            'birth_date' => '1980-01-01',
            'job_title' => 'Job 7A',
            'beacon_id' => 12,
            'deleted_at' => '2020-06-02 18:26:20',
        ]);
        App\People::create([
            'name' => 'Diego',
            'email' => 'mail10A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 10A',
            'beacon_id' => 13,
        ]);
        App\People::create([
            'name' => 'Valeria',
            'email' => 'mail1A@mail.com',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 1A',
            'beacon_id' => 14,
        ]);
        App\People::create([
            'name' => 'Charles',
            'email' => 'mail6A@mail.com',
            'status' => 0,
            'birth_date' => '2002-03-12',
            'job_title' => 'Job 6A',
            'beacon_id' => 15,
        ]);
        App\People::create([
            'name' => 'Arthur',
            'email' => 'ewerq@ASDF.COM',
            'status' => 0,
            'birth_date' => '2020-06-02',
            'job_title' => 'Job 17A',
            'beacon_id' => 2,
        ]);
        App\People::create([
            'name' => 'John Doe',
            'email' => 'johndoe@test.com',
            'status' => 2,
            'birth_date' => '1990-08-10',
            'job_title' => 'Manager',
            'beacon_id' => 4,
            'deleted_at' => '2020-06-04 23:44:32',
        ]);
    }
}
