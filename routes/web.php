<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CategoryController;

// The Landing Page
Route::get('/', function () {
    return view('welcome');
});


//Dashboard
Route::get('/dashboard', [BudgetController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');





//Middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Budgets
    Route::resource('/budgets', BudgetController::class);


    //Categories
    Route::resource('/category', CategoryController::class);
});


require __DIR__.'/auth.php';

