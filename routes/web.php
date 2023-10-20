<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [KategoriController::class,'index'])->name('index');
Route::get('/show/{id}', [KategoriController::class,'show'])->name('show');
Route::get('/create', [KategoriController::class, 'create'])->name('create');
Route::post('/create', [KategoriController::class,'store'])->name('store');
Route::get('/edit/{kategori}', [KategoriController::class,'edit'])->name('edit');
Route::patch('/edit/{kategori}', [KategoriController::class,'update'])->name('update');
Route::delete('/delete/{kategori}', [KategoriController::class,'delete'])->name('delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');