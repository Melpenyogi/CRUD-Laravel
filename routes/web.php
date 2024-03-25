<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
//     echo 'Hello World';
// });
Route::get('/', [LoginController::class, 'index'])->name('login');

// Route::get('/enkripsi', [BelajarController::class, 'enkripsi'])->name('enkripsi');
// Route::get('/enkripsi-detail/{params}', [BelajarController::class, 'enkripsi_detail'])->name('enkripsi-detail');

// Route::get('/hashing', [BelajarController::class, 'hashing'])->name('hashing');

Route::get('locale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/user',   [HomeController::class, 'index'])->name('index');
Route::get('/assets', [HomeController::class, 'assets'])->name('assets');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/store', [HomeController::class, 'store'])->name('user.store');


Route::get('/edit/{id}',   [HomeController::class, 'edit'])->name('user.edit');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('user.detail');
Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');
