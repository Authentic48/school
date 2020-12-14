<?php

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


Route::get('/', [App\Http\Controllers\PageController::class, 'welcome'])->name('index');

Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');

Route::get('/pricings', [App\Http\Controllers\PageController::class, 'pricing'])->name('pricings');

Route::get('/branches', [App\Http\Controllers\PageController::class, 'branch'])->name('branches');

Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');

Route::get('/application', [App\Http\Controllers\ApplicationController::class, 'create'])->name('application');
Route::post('/applications', [App\Http\Controllers\ApplicationController::class, 'store'])->name('applications.store');

Route::get('/Our-team', [App\Http\Controllers\PageController::class, 'team'])->name('team');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);



Route::middleware(['auth'])->middleware(['admin'])->prefix('admin')->group(function () {
   
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

});

Route::middleware(['auth'])->middleware(['manager'])->prefix('manager')->group(function () {
   
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('manager');
    Route::get('/courses', [App\Http\Controllers\CourseController::class, 'admin'])->name('manager.courses');
    Route::get('/courses/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{slug}/edit', [App\Http\Controllers\CourseController::class, 'edit'])->name('courses.edit');
    Route::patch('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.delete');
    Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('manager.reviews');
    Route::get('/reviews/create', [App\Http\Controllers\ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/reviews/{id}/edit', [App\Http\Controllers\ReviewController::class, 'edit'])->name('reviews.edit');
    Route::patch('/reviews/{id}', [App\Http\Controllers\ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{id}', [App\Http\Controllers\ReviewController::class, 'destroy'])->name('reviews.delete');
    Route::get('/pricings', [App\Http\Controllers\PageController::class, 'pricingEdit'])->name('pricings.edit');
    Route::patch('/pricings', [App\Http\Controllers\PageController::class, 'pricingUpdate'])->name('pricings.update');

    Route::get('/branches', [App\Http\Controllers\BranchController::class, 'index'])->name('manager.branches');
    Route::get('/branches/create', [App\Http\Controllers\BranchController::class, 'create'])->name('branches.create');
    Route::post('/branches', [App\Http\Controllers\BranchController::class, 'store'])->name('branches.store');
    Route::get('/branches/{id}/edit', [App\Http\Controllers\BranchController::class, 'edit'])->name('branches.edit');
    Route::patch('/branches/{id}', [App\Http\Controllers\BranchController::class, 'update'])->name('branches.update');
    Route::delete('/branches/{id}', [App\Http\Controllers\BranchController::class, 'destroy'])->name('branches.delete');

    Route::get('/applications', [App\Http\Controllers\ApplicationController::class, 'index'])->name('manager.applications');
    Route::get('/applications/{id}/edit', [App\Http\Controllers\ApplicationController::class, 'edit'])->name('applications.edit');
    Route::patch('/applications/{id}', [App\Http\Controllers\ApplicationController::class, 'update'])->name('applications.update');

    Route::get('/teams', [App\Http\Controllers\TeamController::class, 'index'])->name('manager.teams');
    Route::get('/teams/create', [App\Http\Controllers\TeamController::class, 'create'])->name('teams.create');
    Route::post('/teams', [App\Http\Controllers\TeamController::class, 'store'])->name('teams.store');
    Route::get('/teams/{id}/edit', [App\Http\Controllers\TeamController::class, 'edit'])->name('teams.edit');
    Route::patch('/teams/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('teams.delete');
});  


