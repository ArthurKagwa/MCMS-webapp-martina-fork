<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('Administrator')->insert(['id'=>'a01','fname'=>'Martina','lname'=>'Ainembabazi','email'=>'ainemartinamuhwezi@gmail.com','password'=>'MCMS1234']);
    }
}
