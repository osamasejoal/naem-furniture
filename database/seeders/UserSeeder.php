<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //Admin
            [
                'name'      => 'Sherlock Holmes',
                'email'     => 'sherlock@mail.com',
                'phone'     => '+8801621685575',
                'birthday'  => '2000-05-05',
                'gender'    => '1',
                'password'  => Hash::make('sherlock@mail.com'),
                'role'      => '1',
            ],

            //Moderator
            [
                'name'      => 'Heraclius',
                'email'     => 'heraclius@mail.com',
                'phone'     => '+8801874685575',
                'birthday'  => '2000-05-23',
                'gender'    => '1',
                'password'  => Hash::make('heraclius@mail.com'),
                'role'      => '2',
            ],

            //Customer
            [
                'name'      => 'Sara Seager',
                'email'     => 'seager@mail.com',
                'phone'     => '+8801979585575',
                'birthday'  => '2000-10-17',
                'gender'    => '2',
                'password'  => Hash::make('seager@mail.com'),
                'role'      => '3',
            ]
            
        ]);
    }
}
