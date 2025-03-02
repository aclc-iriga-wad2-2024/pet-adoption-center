<?php

use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Route;


// default
Route::get('/', function () {
    return redirect()->route('categories.index');
});


// categories
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/categories', [CategoryController::class, 'store'])
    ->name('categories.store');

Route::get('/categories/{category}', [CategoryController::class, 'show'])
    ->name('categories.show');

Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::put('/categories/{category}', [CategoryController::class, 'update'])
    ->name('categories.update');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
    ->name('categories.destroy');


// breeds
Route::get('/breeds', function() {
    return view('breeds.index');
})->name('breeds.index');


// customers
Route::get('/customers', function() {
    return view('customers.index');
})->name('customers.index');


// adoptions
Route::get('/adoptions', function() {
    return view('adoptions.index');
})->name('adoptions.index');
