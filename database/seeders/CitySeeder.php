<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cities =
            [
                [
                    'name' => 'Alexandria',
                    'country_id' => 1,
                ],
                [
                    'name' => 'Om Dorman',
                    'country_id' => 2,
                ],
            ];

        DB::table('cities')->insert($cities);
    }
}
