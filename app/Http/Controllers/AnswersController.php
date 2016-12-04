<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswersController extends Controller
{
    public function showans(Request $request, Question $question){

        $answer = new Answer;
        $answer->body = $request->body;
        $question->answers()->save($answer);

        return back();
    }

    public function edit(Answer $answer){

        return view('answers.edit', compact('answer'));

    }

    public function update(Request $request, Answer $answer){


        $temp = $request->all();
        $answer->update($temp);

        return back();

    }

}
