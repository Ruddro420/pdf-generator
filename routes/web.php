<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadData;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', [HomeController::class, 'index'])->name('pages.index');

Route::get('/view', [UploadData::class,'view'])->name('pages.store.view');
Route::post('/store', [UploadData::class, 'store'])->name('pages.store.index');

Route::get('/edit/{id}', [UploadData::class,'edit'])->name('pages.store.edit');
Route::put('/update/{id}', [UploadData::class,'update'])->name('pages.store.update');
Route::get('/details/{id}', [UploadData::class,'details'])->name('pages.store.details');

Route::delete('/delete/{id}', [UploadData::class,'destroy'])->name('pages.store.delete');

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
