<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

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
Route::resource('courses', CourseController::class);