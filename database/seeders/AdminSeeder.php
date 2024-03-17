<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = [
            [
                'name' => 'Mina Fouad',
                'email' => 'mina.fouad@caritasalex.org',
                'password' => Hash::make(123456789),
                'group' => 999,

            ],
        ];
        DB::table('admins')->insert($admin);
    }
}
