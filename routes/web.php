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

Route::get('/course', [App\Http\Controllers\CourseController::class, 'show'])->name('course');

Auth::routes();

Route::middleware(['auth'])->middleware(['admin'])->prefix('admin')->group(function () {
   
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

});

Route::middleware(['auth'])->middleware(['manager'])->prefix('manager')->group(function () {
   
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('manager');
    
});  


