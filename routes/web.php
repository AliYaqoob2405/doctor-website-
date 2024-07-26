<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

//   Route::get('/', function () {
//       return view('welcome');
//   });

//   Route::get('/dashboard', function () {
//       return view('dashboard');
//   })->middleware(['auth'])->name('dashboard');

//   require __DIR__.'/auth.php';



Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('blog', [HomeController::class, 'blog']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/error', [HomeController::class, 'error']);
Route::post('/User', [UserController::class, 'getData'])->name('User');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin');
    Route::get('/create', 'create');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
    Route::POST('/update/{id}', 'update')->name('update');
    Route::get('/status/{id}', 'status')->name('status');
    Route::get('/search', 'search')->name('search');
});


