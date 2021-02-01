<?php

use Illuminate\Support\Facades\Route;
use App\User as User;
use App\Rol as Rol;
use App\Duda as Duda;
use App\Respuesta as Respuesta;
use App\Http\Controllers\DudaController;

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
Auth::routes();

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/duda', function () {
    return view('duda');
})->name('duda');

Route::post('/duda.store',[DudaController::class, 'store'])
->name('duda.store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
