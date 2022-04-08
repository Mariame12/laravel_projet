<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdherentController;
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
    return view('welcome');
});

Route::get('adherent.index',[AdherentController::class,'index'])->name('adherent.index');
Route::get('adherent.create',[AdherentController::class,'create'])->name('adherent.create');
Route::get('adherent.destroy.{id}',[AdherentController::class,'destroy'])->name('adherent.destroy');
Route::get('adherent.edit.{id}',[AdherentController::class,'edit'])->name('adherent.edit');
Route::post('adherent.store',[AdherentController::class,'store'])->name('enregistrer.adherent');
Route::any('adherent/update/{id}', [AdherentController::class, 'update'])->name('adherent.update');
Route::get('adherent.search', [AdherentController::class, 'search']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
