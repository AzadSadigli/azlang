<?php

namespace App\Http\Controllers;
use App\Question;
use App\Topic;
use App\Gramma;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function question($id){
    	$ques = Question::find($id);
    	return view('admin.answers', ['ques' => $ques]);
    }
    public function addquestion(Request $request){
    	$ques = new Question;
    	$ques->question_body = $request->question_body;
        $ques->rightanswer = $request->rightanswer;
    	$ques->ans_1 = $request->ans_1;
    	$ques->ans_2 = $request->ans_2;
    	$ques->ans_3 = $request->ans_3;
    	$ques->ans_4 = $request->ans_4;
    	$ques->ans_5 = $request->ans_5;
        $ques->save();
        return redirect()->back()->with('succ3','Question added successfully');
    }
    public function getanswers(Request $request, $id){
    	$ques = Question::find($id);
    	$ques->question_body = $request->question_body;
    	$ques->correct_ans_1 = $request->correct_ans_1;
    	$ques->correct_ans_2 = $request->correct_ans_2;
    	$ques->correct_ans_3 = $request->correct_ans_3;
    	$ques->correct_ans_4 = $request->correct_ans_4;
    	$ques->correct_ans_5 = $request->correct_ans_5;
    	$ques->update();
    	return redirect()->back()->with('succ4','Answered successfully');
    }
    public function changeanswer(Request $request, $id){
        $ques = Question::find($id);
        $ques->rightanswer = $request->rightanswer;
        $ques->update();
        return redirect()->back()->with('succ44','Answered successfully');
    }
    public function getallquestions(){
    	$ques = Question::orderBy('created_at', 'desc')->get();
    	return view('admin.table', ['ques' => $ques]);
    }

    public function topiccreation(){
    	return view('admin.addtopic');
    }
    public function grammacreation(){
    	return view('admin.addgramma');
    }
    public function addtopic(Request $req){
    	$topic = new Topic;
    	$topic->name_topic = $req->topic_name;
    	$topic->save();
    	return redirect()->back()->with('succ_topic','Topic created successfully');

    }
    public function deletetopic($id){
    	DB::table('topic')->where('id',$id)->delete();
    	return redirect()->back()->with('topic_deleted','Topic deleted successfully');
    }
    public function grammalist(){
    	return view('admin.grammalist');
    }
    public function addgramma(Request $req){
    	$gramma = new Gramma;
    	$gramma->gramma = $req->gramma;
    	$gramma->title = $req->title;
    	$gramma->topic_id = $req->topic_id;
    	$gramma->definition_1 = $req->definition_1;
    	$gramma->definition_2 = $req->definition_2;
    	$gramma->save();
    	return redirect()->back()->with('gramma_added', 'Gramma added successfully!');
    }
}
