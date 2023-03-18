<?php

namespace Database\Seeders;

use App\Models\Archetype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArchetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Archetype::create([
            'archetype_name'=>'The Problem Solver',
            'summary'=>"If you're someone who enjoys solving complex legal issues, you may have a knack for thinking critically and logically. You probably take pride in finding 
            practical solutions that can help your clients or move the law forward. You might be great at analyzing legal precedents and developing creative arguments
            and strategies. This can lead you to work in litigation, arbitration, or other forms of dispute resolution. People in the legal market may perceive you as
            competent, efficient, and effective, which means you may be in high demand."
        ]);
        Archetype::create([
            'archetype_name'=>'The Academic',
            'summary'=>"Are you someone who loves the thrill of the chase when it comes to uncovering the truth? If so, you may have a keen eye for detail and be drawn to legal
            fields that require extensive investigation, like criminal law, intellectual property, or environmental law. You might be skilled at gathering and analyzing 
            evidence, as well as identifying potential weaknesses in an opponent's case. You may also enjoy regulatory or compliance work, where you can make sure
            companies are following the law. People in the legal market may see you as thorough, knowledgeable, and precise."
        ]);
        Archetype::create([
            'archetype_name'=>'The Investigator',
            'summary'=>"If you have a passion for research, writing, and teaching, you may be well-suited to work in legal academia or in government or nonprofit roles where you
            can help shape policy and advocate for legal reforms. You may excel at synthesizing large amounts of information, identifying trends and patterns, and
            presenting complex legal concepts in a clear and accessible way. You might also be a great writer and communicator. People in the legal market may see
            you as idealistic or less practical than other types of lawyers, but they may also recognize your expertise and thought leadership, which can make you
            highly valuable in certain contexts."
        ]);
    }
}
