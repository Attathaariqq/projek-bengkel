<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(CategoryController::class)->name('category.')->group(function (){
    Route::get('/category', 'get')->name('get');
    Route::get('/category/add', 'addView')->name('add.view');
    Route::post('/category/add/save', 'add')->name('add');
    Route::get('/category/edit/{category}', 'editView')->name('edit.view');
    Route::patch('/category/edit/save/{category}', 'edit')->name('edit');
    Route::delete('/category/delete/{category}', 'delete')->name('delete');
});
