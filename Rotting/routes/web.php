<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet',[GreetController::class, 'showGreeting']);
Route::resource('tasks', TaskController::class);