<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'FullName'=>'Sanidu Ilankoon',
            'Initial'=>'S.Ilankoon',
            'gender'=>'Male',
            'role'=>'Admin',
            'email'=>'sanidu@gmail.com',
            'StudentLectureId'=>'0000',
            'NIC'=>'123456789v',
            'Contact'=>'0721234323',
            'password'=>Hash::make('admin1234')
        ]);

        DB::table('users')->insert([
            'FullName'=>'Madawa Weerakoon',
            'Initial'=>'M.Weerakoon',
            'gender'=>'Male',
            'role'=>'Lecture',
            'email'=>'madawa@gmail.com',
            'StudentLectureId'=>'2321',
            'NIC'=>'123456549v',
            'Contact'=>'0751234323',
            'password'=>Hash::make('madawa1234')
        ]);

        DB::table('users')->insert([
            'FullName'=>'Geshani Neelawathura',
            'Initial'=>'G.Neelawathura',
            'gender'=>'Female',
            'role'=>'Alumni',
            'email'=>'geshani@gmail.com',
            'StudentLectureId'=>'SC/2012/6098',
            'NIC'=>'435456789v',
            'Contact'=>'07132234323',
            'password'=>Hash::make('geshani1234')
        ]);

        DB::table('users')->insert([
            'FullName'=>'Naduni Wasana',
            'Initial'=>'N.Wasana',
            'gender'=>'Female',
            'role'=>'Student',
            'email'=>'naduni@gmail.com',
            'StudentLectureId'=>'SC/2020/10123',
            'NIC'=>'786456789v',
            'Contact'=>'0751235623',
            'password'=>Hash::make('naduni1234')
        ]);
    }
}
