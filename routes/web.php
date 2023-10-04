<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admn.')->prefix('admin')->group(function (){

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
    Route::resource('/categories',CategoryController::class);
    Route::resource('/menus',MenuController::class);
    Route::resource('/Table',TableController::class);
    Route::resource('/reservation',ReservationController::class);


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
