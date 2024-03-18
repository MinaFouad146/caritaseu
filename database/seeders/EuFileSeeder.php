<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EuFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $eufile =
            [
                [
                    'eu_no' => 999,
                    'Open_File_Location' => 'office',
                    'Referral_From' => 'UNHCR',
                    'Referral_no' => 1,
                    'city_id' => 1,
                    'area' => 'Sidi Bishr',
                    'address' => '50 Manshia st.',
                    'created_by' => 1,
                ],

            ];

        DB::table('eu_files')->insert($eufile);
    }
}
