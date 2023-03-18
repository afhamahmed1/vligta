<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profession::create([
            'profession_name'=>'Student'
        ]);
        Profession::create([
            'profession_name'=>'Scholar'
        ]);
        Profession::create([
            'profession_name'=>'Professional'
        ]);
        Profession::create([
            'profession_name'=>'Business Owner'
        ]);
        Profession::create([
            'profession_name'=>'Public Servant/Government Employee'
        ]);
    }
}
