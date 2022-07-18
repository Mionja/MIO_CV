<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgesController;
use App\Http\Controllers\ResumesController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\ObjectivesController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\Hard_skillsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Soft_skillsController;
use App\Http\Controllers\Perso_detailsController;


Route::get('/', [HomeController::class, 'index'])->name('home'); //A rectifier apres

Route::resource('perso_details', Perso_detailsController::class);
Route::resource('education', EducationsController::class);
Route::resource('experience', ExperiencesController::class);
Route::resource('formation', FormationsController::class);
Route::resource('objective', ObjectivesController::class);
Route::resource('h_skill', Hard_skillsController::class);
Route::resource('s_skill', Soft_skillsController::class);
Route::resource('activity', ActivitiesController::class);
Route::resource('education', EducationsController::class);
Route::resource('language', LanguagesController::class);

Route::get('/age', [AgesController::class, 'index'])->name('age');
Route::get('/age_u', [AgesController::class, 'update'])->name('update');
Route::get('/cv', [ResumesController::class, 'index'])->name('cv');

