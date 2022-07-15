<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumesController;
use App\Http\Controllers\Perso_detailsController;


Route::get('/', function () {return view('layout');})->name('layout'); //A rectifier apres
Route::resource('perso_details', Perso_detailsController::class);
Route::get('/cv', [ResumesController::class, 'index'])->name('cv');

