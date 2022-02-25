<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ClasseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');


// Afficher la vue classe
Route::get('/classe', [ClasseController::class, 'getClasse']);

Route::get('/login',[AuthentificationController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[AuthentificationController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[AuthentificationController::class,'registerUser'])->name("register-user");
Route::post('/login-user',[AuthentificationController::class,'loginUser'])->name("login-user");
Route::get('/dashboard',[AuthentificationController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[AuthentificationController::class,'logout']);

//Classe
Route::get('/VoirClasse',[ClasseController::class,'TouteClasse'])->name("VoirClasse");
Route::post('/ajoutClasse',[ClasseController::class,'AjouterClasse'])->name("ajoutClasse");
