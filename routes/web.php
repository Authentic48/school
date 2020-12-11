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

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');

Route::get('/courses/{slug}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');

Auth::routes();



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
});  


