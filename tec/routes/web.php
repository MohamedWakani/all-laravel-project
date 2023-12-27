<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ImportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AllController::class,'index']);
Route::post('/',[AllController::class,'store']);
Route::get('/show',[AllController::class,'showData']);
Route::get('/create',[AllController::class,'create']);
Route::post('/storeProf',[AllController::class,'storeProf']);
Route::post('/generate-pdf',[AllController::class,'generatePDF'])->name('generate-pdf');
Route::post('/import', [ImportController::class,'import']);
Route::get('/importdata', [ImportController::class,'index']);

