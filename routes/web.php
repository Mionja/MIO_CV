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
use App\Http\Controllers\Soft_skillsController;
use App\Http\Controllers\Perso_detailsController;


Route::get('/', function () {return view('layout');})->name('layout'); //A rectifier apres

Route::resource('perso_details', Perso_detailsController::class);
Route::get('/cv', [ResumesController::class, 'index'])->name('cv');
Route::get('/education', [EducationsController::class, 'index'])->name('education');
Route::get('/experience', [ExperiencesController::class, 'index'])->name('experience');
Route::get('/formation', [FormationsController::class, 'index'])->name('formation');
Route::get('/objective', [ObjectivesController::class, 'index'])->name('objective');
Route::get('/age', [AgesController::class, 'index'])->name('age');
Route::get('/hardSkills', [Hard_skillsController::class, 'index'])->name('h_skill');
Route::get('/softSkills', [Soft_skillsController::class, 'index'])->name('s_skill');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activity');
Route::get('/languages', [LanguagesController::class, 'index'])->name('language');

