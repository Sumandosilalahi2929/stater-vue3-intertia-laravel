<?php

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return QuestionResource::collection(
        Question::with('user')->latest()->paginate(15)
    );

    return inertia('Questions/Index', [
        'questions' => [
            ['id' => 1, 'title' => 'Question 1'],
            ['id' => 2, 'title' => 'Question 2'],
        ]
    ]);
})->name('question.index');

Route::get('/question/{id}', function ($id) {
    return inertia('Questions/Show', [
        'question' => ['id' => $id, 'title' => 'Question ' . $id]
    ]);
})->name('question.show');
