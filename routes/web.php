<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataobatController;


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

Route::get('/obat', [DataobatController::class, 'index'])->name('index');
Route::get('/obat/create', [DataobatController::class, 'create'])->name('create.dataobat');
Route::post('/obat/store', [DataobatController::class, 'store'])->name('store.dataobat');
Route::get('/obat/edit/{id}', [DataobatController::class, 'edit'])->name('edit.dataobat');
Route::post('/obat/update/{id}', [DataobatController::class, 'update'])->name('update.dataobat');
Route::get('/obat/delete/{id}', [DataobatController::class, 'delete'])->name('delete.dataobat');

Route::get('/input', function () {
    return view('inputObat');
});