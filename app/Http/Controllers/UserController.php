<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getquestion($id){
    	$ques = Question::find($id);
    	return view('quiz', ['ques' => $ques]);
    }
}
