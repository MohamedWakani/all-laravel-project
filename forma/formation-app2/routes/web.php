<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FormationController;

// Welcome Page
Route::get('/', function (){
    return view('welcome');
});


// Institution Views and Actions
Route::get('/institutions',[InstitutionController::class,'index']);
Route::post('/institutions/store', [InstitutionController::class,'store'])->name('institutions.select');

// Teacher Views and Actions
Route::get('/teachers', [TeacherController::class,'index'])->name('teachers.index');
Route::get('/teachers/create', [TeacherController::class,'create'])->name('teachers.index');
Route::post('/teachers/store', [TeacherController::class,'store']);

// Formation Views and Actions
Route::get('/formations/create', [FormationController::class,'create'])->name('formations.create');
Route::post('/formations', [FormationController::class,'store'])->name('formations.store');
// Route::post('/formations/assign/{id}', [FormationController::class,'assignTeachers'])->name('formations.assign');
Route::get('/formations', [FormationController::class,'index'])->name('formations.index');
Route::post('/formations/assign', [FormationController::class,'assignTeachers'])->name('formations.assign');
Route::post('/assign/teachers', [TeacherController::class,'assignTeachers']);


Route::get('/formations/in-formation', [FormationController::class,'viewTeachersInFormation']);

Route::get('/get-teachers-for-formation',[TeacherController::class,'showTeachersForFormation']);

// Add any other routes or actions you need here




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
