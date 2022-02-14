<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gender')->insert([
            [
                'gender_id' => 1,
                'gender_desc' => "male"
            ],
            [
                'gender_id' => 2,
                'gender_desc' => "female"
            ]
        ]);
    }
}
