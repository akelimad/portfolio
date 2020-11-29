<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CertificationController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/formations/form/{id?}', [FormationController::class, 'form'])->name('formations.form');
Route::post('/formations/form/store', [FormationController::class, 'store'])->name('formations.store');
Route::any('/formations/{formation}/delete', [FormationController::class, 'delete'])->name('formations.delete');

Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences');
Route::get('/experiences/form/{id?}', [ExperienceController::class, 'form'])->name('experiences.form');
Route::post('/experiences/form/store', [ExperienceController::class, 'store'])->name('experiences.store');
Route::any('/experiences/{experience}/delete', [ExperienceController::class, 'delete'])->name('experiences.delete');


Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences');
Route::get('/skills', [SkillController::class, 'index'])->name('skills');
Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications');
