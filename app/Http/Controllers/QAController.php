<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\Question;

class QAController extends Controller
{
    public function index(){

        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

    public function upload(Request $request, Question $question){

        $question = new Question;

        $question->title = $request->title;
        $question->tags = $request->tags;
        $question->subject = $request->subject;
        $question->chapter = $request->chapter;
        $question->description = $request->description;
        $question->image= $request->image;

        $question->save();

        return back();

    }

    public function show(Question $question){

        //$question->load('answers.user');

        $question->load('answers.user');

        return view('questions.show', compact('question'));
    }

    public function addQ(Request $request)
    {
        return $request->all();

    }
}
