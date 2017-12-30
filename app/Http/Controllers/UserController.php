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
    public function checkresult(Request $request){
    	$result = new Results;
    	$result->user_id = $request->user_id;
    	$result->givenans_1 = $request->givenans_1;
    	$result->rightans_1 = $request->rightans_1;
    	$result->givenans_2 = $request->givenans_2;
    	$result->rightans_2 = $request->rightans_2;
    	$result->givenans_3 = $request->givenans_3;
    	$result->rightans_3 = $request->rightans_3;
    	$result->givenans_4 = $request->givenans_4;
    	$result->rightans_4 = $request->rightans_4;
    	$result->givenans_5 = $request->givenans_5;
    	$result->rightans_5 = $request->rightans_5;
        $result->save();
        return Redirect()->route('testresult')->with('succ3','Product added to cart successfully');

        // return redirect()->back()->with('succ3','Done with test');
    }
    public function testresult(){
    	$result = Results::all();
    	return view('testresult', ['result' => $result]);
    }
}
