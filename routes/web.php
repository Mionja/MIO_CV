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
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/users', [UserController::class, 'store'])->name('store_user');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

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
Route::resource('age', AgesController::class)->middleware('auth');

Route::get('/cv', [ResumesController::class, 'index'])->name('cv');

