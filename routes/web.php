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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/newuser', function () {
    return view('newuser');
})->name('newuser');

Route::get('/dashboard/edituser', function () {
    return view('edituser');
})->name('edituser');

Route::get('/dashboard/rmuser', function () {
    return view('rmuser');
})->name('rmuser');

require __DIR__.'/auth.php';
