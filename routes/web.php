<?php

use App\Http\Controllers\{
    PeopleController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PeopleController::class, 'list'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/register', function () {
    return view('admin.people.register');
})->name('people.register');

Route::post('/dashboard/store', [PeopleController::class, 'store'])->name('people.store');

Route::get('/dashboard/edituser', function () {
    return view('admin.people.edit');
})->name('people.edit');

Route::get('/dashboard/rmuser', function () {
    return view('admin.people.remove');
})->name('people.remove');

require __DIR__ . '/auth.php';
