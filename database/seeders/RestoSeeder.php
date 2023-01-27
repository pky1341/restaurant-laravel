<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
        'name'=>'KFC Restaurants',
        'email'=>'kfc@test.com',
        'addr'=>'noida sector 21'
    ],[
     'name'=>'OM sweets',
     'email'=>'om@test.com',
     'addr'=>'sector 10 gurgaon',
    ],
    [
     'name'=>'Dominos Restaurants',
     'email'=>'dominos@test.com',
     'addr'=>'south delhi'
    ],[
    'name'=>'Mcdonalds Restaurants',
    'email'=>'Mcdonalds@test.com',
    'addr'=>'sector 101 gurgaon'
    ],
    [
    'name'=>'natural food',
    'email'=>'natural@test.com',
    'addr'=>'noida sector 120'
    ],[
     'name'=>'spice food',
     'email'=>'spice@test.com',
     'addr'=>'east delhi'

    ]
        ]);
    
    
    }
}
