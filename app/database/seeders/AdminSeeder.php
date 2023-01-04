<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        //front desk account
        DB::table('users')->insert([
            'name'=>Str::singular('Front Desk'),
            'email'=>Str::singular('frontdesk@gmail.com'),
            'password'=>Str::singular(Hash::make('password')),

            
        ]);

        //management account
        DB::table('users')->insert([
            'name'=>Str::singular('Manager'),
            'email'=>Str::singular('manager@gmail.com'),
            'password'=>Str::singular(Hash::make('manager')),

            
        ]);

        //school accountant account
        DB::table('users')->insert([
            'name'=>Str::singular('School Accountant'),
            'email'=>Str::singular('accountant@gmail.com'),
            'password'=>Str::singular(Hash::make('accountant')),

            
        ]);

        //housekeeping account
        DB::table('users')->insert([
            'name'=>Str::singular('House Keeper'),
            'email'=>Str::singular('housekeeping@gmail.com'),
            'password'=>Str::singular(Hash::make('housekeeping')),

            
        ]);
    }
}
