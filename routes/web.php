<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturaController;
use App\Models\Lectura;

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


// Route::get('/', [LecturaController::class, 'index'])->middleware('auth');
Route::get('/', [LecturaController::class, 'index']);
Route::get('lectura/{lectura_id}/{capitulo_id}/{lectura_name}', [LecturaController::class, 'versiculo'])->name('lectura');
Route::get('lectura/{lectura_id}/{lectura_name}', [LecturaController::class, 'capitulo'])->name('lectura');




// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// $lectura = Lectura::find(3);
// dd($lectura->capitulos);
