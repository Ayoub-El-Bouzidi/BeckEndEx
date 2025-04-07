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
Route::get('nature',[NatureController::class , 'index'])->name('nature.create');
Route::post('nature',[NatureController::class,'store'])->name('nature.store');
Route::get('nature/{id}/edit',[NatureController::class,'edit'])->name('nature.edit');
Route::put('nature',[NatureController::class,'update'])->name('nature.store');
Route::delete('nature/{id}',[NatureController::class,'destroy'])->name('nature.delete');

Route::get('salle',[SalleController::class , 'index'])->name('salle.index');
Route::get('salle/create',[SalleController::class,'create'])->name('salle.create');
Route::post('salle',[SalleController::class,'store'])->name('salle.store');
Route::get('salle/{id}/edit',[SalleController::class,'edit'])->name('salle.edit');
Route::put('salle/{id}',[SalleController::class,'update'])->name('salle.update');
Route::delete('salle/{id}',[SalleController::class,'destroy'])->name('salle.delete');


