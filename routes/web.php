<?php

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $questions = QuestionResource::collection(
        Question::with('user')->latest()->paginate(15)
    );

    return inertia('Questions/Index', [
        'questions' => $questions
    ]);
})->name('question.index');

Route::get('/question/{question:slug}', function (Question $question) {
    // return QuestionResource::make($question);
    return inertia('Questions/Show', [

        'question' => QuestionResource::make($question)
    ]);
})->name('question.show');
