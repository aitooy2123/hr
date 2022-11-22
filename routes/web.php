<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Auth::routes();

Route::get('/', function () {
    // return view('welcome');
    // return view('layouts.theme.adminlite');
    return view('layouts.theme.COPY');
});

// Route::get('/test', function () {return view('layouts.test');})->name('test');

Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/test/create', function () {return view('layouts.test_create');})->name('test.create');
Route::post('/test/insert', [HomeController::class, 'test_insert'])->name('test.insert');
Route::get('/test/edit/{id}', [HomeController::class, 'test_edit'])->name('test.edit');
Route::post('/test/update', [HomeController::class, 'test_update'])->name('test.update');
Route::get('/test/delete/{id}', [HomeController::class, 'test_delete'])->name('test.delete');



Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');


Route::get('/home', [HomeController::class, 'index'])->name('home');
