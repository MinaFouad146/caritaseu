<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\CityModel;
use App\Models\CountryModel;
use App\Models\EuFile;
use App\Models\EuFileModel;
use App\Models\IndividualModel;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        if (!optional(Admin::first())->exists())
            $this->call(AdminSeeder::class);

        if (!optional(CountryModel::first())->exists())
            $this->call(CountrySeeder::class);

        if (!optional(CityModel::first())->exists())
            $this->call(CitySeeder::class);

        if (!optional(EuFileModel::first())->exists())
            $this->call(EuFileSeeder::class);

        if (!optional(IndividualModel::first())->exists())
            $this->call(IndividualsSeeder::class);
    }
}
