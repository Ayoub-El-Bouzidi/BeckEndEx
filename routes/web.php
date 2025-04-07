<?php

use App\Http\Controllers\NatureController;
use App\Http\Controllers\SalleController;
use App\Models\Salle;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// nture
// Route::resource('nature',NatureController::class);
// Route::resource('salle',SalleController::class);
Route::get('nature',[NatureController::class , 'index'])->name('nature.index');
Route::get('salle',[SalleController::class , 'index'])->name('salle.index');
Route::get('salle/create',[SalleController::class,'create'])->name('salle.create');
Route::post('salle',[SalleController::class,'store'])->name('salle.store');
