<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin','Admin.dashboard');



Route::resource('student',StudentController::class);
Route::resource('course',CourseController::class);
Route::resource('teacher',TeacherController::class);


Route::prefix('teacher')->group(function(){
    Route::get('/addcourse/{id}',[TeacherController::class,'getAddCourse'])->name('addcourse');
    Route::post('/addcourse/{id}',[TeacherController::class,'addCourse'])->name('addcourse');
});
