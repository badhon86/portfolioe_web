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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/students/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');

//Route::get('students', 'StudentController@index')->name('student.index');


