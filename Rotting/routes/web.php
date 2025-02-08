<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/greet',[GreetController::class, 'showGreeting']);
Route::resource('tasks', TaskController::class);