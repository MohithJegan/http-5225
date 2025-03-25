<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/students', function () {
//     return view('student.index');
// });

// Route::get('/students/update', function () {
//     return view('student.index');
// });

Route::resource('students', StudentController::class);