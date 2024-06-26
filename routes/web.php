<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', function(){
    return view('home');
})->name('home')->middleware('auth');

Route::get('/pessoa',[PessoaController::class, 'index'])->name('pessoa.index');
Route::get('/pessoa/create',[PessoaController::class, 'create'])->name('pessoa.create');
Route::post('/pessoa',[PessoaController::class, 'store'])->name('pessoa.store');

Route::get('/login', [LoginController::class, 'login'])->name('show-login');
Route::post('/login', [LoginController::class, 'doLogin'])->name('do-login');
Route::get('/logout', [LoginController::class, 'doLogout'])->name('do-logout');
