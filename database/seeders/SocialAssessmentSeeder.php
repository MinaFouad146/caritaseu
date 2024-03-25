<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $socialassesment = [
            [
                'id' => 1,
                'family_income_resources' => 2000,
                'family_expenses' => 1500,
                'accommodation_type' => 'rent',
                'family_summary' => 'very very ver good',
                'family_level' => 'good',
                'medical_contributions' => .2,
                'home_visit' => 1,
                'eu_no_id' => 999,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('social_assessments')->insert($socialassesment);
    }
}
