<?php

namespace App\Http\Controllers;
use App\Question;
use App\Gramma;
use App\Results;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getquestion($id){
    	$ques = Question::find($id);
    	return view('quiz', ['ques' => $ques]);
    }
    public function getgramma($id){
    	$gramma = Gramma::find($id);
    	return view('gramma', ['gramma' => $gramma]);
    }
}
