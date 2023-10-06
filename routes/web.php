<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


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

Route::get('/tampil',[BarangController::class, 'index'])->name('Barang.index');
Route::get('/tampil/Tambah',[BarangController::class, 'create'])->name('Barang.create');
Route::post('/tampil/Tambah',[BarangController::class, 'store'])->name('Barang.store');
Route::get('/tampil/Edit/{brgs}',[BarangController::class, 'edit'])->name('Barang.edit');
Route::put('/tampil/update/{brgs}',[BarangController::class, 'update'])->name('Barang.update');
Route::delete('/tampil/Delet/{brgs}',[BarangController::class, 'destroy'])->name('Barang.destroy');

