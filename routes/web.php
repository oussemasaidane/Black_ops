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
Route::get('/categorie', function () {
    return view('back.Categorie');
})->name('categorie');
Route::get('admin', [App\Http\Controllers\AdminController::class, 'back'])->name('admin');
Route::get('user', [App\Http\Controllers\AdminController::class, 'front']);

Route::get('/test', function () {
    return view('front.test');
});
Route::get('categories/{categorie}', [App\Http\Controllers\CategorieController::class,'show'])->name('categories.show');
Route::post('categories/{categorie}', [App\Http\Controllers\CategorieController::class,'destroy'])->name('categories.destroy');

//Route::resource('categories', App\Http\Controllers\CategorieController::class);
Route::get('/categories_create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [App\Http\Controllers\CategorieController::class, 'store'])->name('categories.store');

Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('categories.index');


Route::get('/categories/{categorie}/edit', [App\Http\Controllers\CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [App\Http\Controllers\CategorieController::class, 'update'])->name('categories.update');


/// Route for Ticket 

///Route::get('tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::resource('tickets', App\Http\Controllers\TicketsController::class);