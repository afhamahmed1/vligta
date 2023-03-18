<?php

namespace Database\Seeders;

use App\Models\LegalField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegalFieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LegalField::create([
            'legal_field_name'=>'Corporate Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Commercial Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Securities Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'International Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'International Trade Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Intellectual Property Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Technology Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Investment Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Banking Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Startup Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Administrative/Service Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Criminal Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Human Rights Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Civil Procedure Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Tax and Finance Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Public Infrastructure Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Environmental Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Public Health Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Competition Law'
        ]);
        LegalField::create([
            'legal_field_name'=>'Alternative Dispute Resolution'
        ]);
        LegalField::create([
            'legal_field_name'=>'Law & Public Policy'
        ]);
    }
}
