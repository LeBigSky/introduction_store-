<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [AllController::class, "home"])->name('home');
Route::post('/eleve', [AllController::class, "store"])->name('store.eleve');
Route::get('creation', [AllController::class, "crea"])->name('creation');