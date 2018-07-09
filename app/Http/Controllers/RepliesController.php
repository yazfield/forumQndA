<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Question $question)
    {
        $question->addReply([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'validated' => 0,
        ]);

        return back();
    }
}
