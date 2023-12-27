<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontController::class, 'index'])->name('index')->middleware('auth');
Route::get('/404', [FrontController::class, 'page404'])->middleware('auth');
Route::get('/beneficiaire', [FrontController::class, 'beneficiaire'])->middleware('auth');
Route::get('/createBeneficiaire', [FrontController::class, 'createNewBeneficiaire'])->name('createNewBeneficiaire');
Route::post('/store', [FrontController::class, 'storeNewBeneficiaire'])->name('storeNewBeneficiaire');




Route::resource('fonctionnaires', App\Http\Controllers\FonctionnaireController::class)->middleware('auth');
Route::resource('formations', App\Http\Controllers\FormationController::class)->middleware('auth');
Route::resource('beneficiaires', App\Http\Controllers\BeneficiaireController::class)->middleware('auth') ;

Route::get('languageConverter/{locale}', function($locale){

    
    if (in_array($locale,['ar', 'en', 'fr'])) {
        session()->put('locale',$locale);
        
        return redirect()->back();
    }

})->name('languageConverter');


Auth::routes();