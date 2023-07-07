<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get("", function () {
    return view("dashboard");
})->name("dashboard");

Route::controller(CategoryController::class)->name("category.")->group(function (){
    Route::get("/category", "get")->name("get");
    Route::get("/category/add", "addView")->name("add.view");
    Route::post("/category/add/save", "add")->name("add");
    Route::get("/category/edit/{category}", "editView")->name("edit.view");
    Route::patch("/category/edit/save/{category}", "edit")->name("edit");
    Route::delete("/category/delete/{category}", "delete")->name("delete");
});

Route::controller(ProductController::class)->name("product.")->group(function () {
    Route::get("/product", "get")->name("get");
    Route::get("/product/add", "addView")->name("add.view");
    Route::post("/product/add/save", "add")->name("add");
    Route::get("/product/edit/{product}", "editView")->name("edit.view");
    Route::patch("/product/edit/save/{product}", "edit")->name("edit");
    Route::delete("/product/delete/{product}", "delete")->name("delete");
});
