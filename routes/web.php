<?php

use App\Http\Controllers\{
    PeopleController
};
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [PeopleController::class, 'list'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/people/register', [PeopleController::class, 'register'])->name('people.register');
Route::post('/dashboard/people/store', [PeopleController::class, 'store'])->name('people.store');
Route::delete('/dashboard/people/delete/{id}', [PeopleController::class, 'destroy'])->name('people.destroy');
Route::get('/dashboard/people/edit/{id}', [PeopleController::class, 'edit'])->name('people.edit');
Route::put('/dashboard/people/update/{id}', [PeopleController::class, 'update'])->name('people.update');
Route::any('/dashboard/people/filter', [PeopleController::class, 'filter'])->name('people.filter');


Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
