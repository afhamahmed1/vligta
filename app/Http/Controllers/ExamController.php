<?php

namespace App\Http\Controllers;

use App\Models\LegalField;
use App\Models\Profession;
use App\Models\UserLegalField;
use App\Models\UserProfession;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function startExam(){
        $professions = Profession::get();
        $interests = LegalField::get();
        return view('startexam',['professions'=>$professions,'interests'=>$interests]);
    }

    public function preExamForm(Request $request){
        UserProfession::create([
            'user_id'=>auth()->user()->id,
            'profession_id'=>$request->profession
    ]);
    foreach($request->interests as $interest){
        UserLegalField::create([
            'user_id'=>auth()->user()->id,
            'legal_field_id'=>$interest
        ]);
    }
    return response()->json(['success'=>'Data Inserted'],201);
    }
}
