<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuestionController::class, 'index'])->name('question.index');

Route::get('/question/{question:slug}', [QuestionController::class, 'show'])->name('question.show');
