<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndividualsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ind = [
            [
                'id' => 1,
                'name' => 'mohamed Ahmed',
                'personal_info' => 'personal info',
                'education_info' => 'school school',
                'work_info' => 'work work',
                'eu_no_id' => 999,
                'country_id' => 1,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 2,
                'name' => 'محمد احمد',
                'personal_info' => 'بينات شخصية',
                'education_info' => 'بيانات المدرسة',
                'work_info' => 'تفاصيل العمل',
                'eu_no_id' => 999,
                'country_id' => 1,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];
        DB::table('individuals')->insert($ind);
    }
}
