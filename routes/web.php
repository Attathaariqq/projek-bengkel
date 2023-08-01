<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::middleware("auth.check")->group(function () {
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

    Route::controller(AuthController::class)->name('auth.')->group(function () {
        Route::get("/login", "get")->name("get")->withoutMiddleware(["auth.check"]);
        Route::post("/login/auth", "auth")->name("auth")->withoutMiddleware(["auth.check"]);
        Route::get("/user", "userView")->name("user");
        Route::get("/user/add", "addUserView")->name("add.view");
        Route::post("/user/add/save", "add")->name("add");
        Route::get("/user/edit/{user}", "editUserView")->name("edit.view");
        Route::patch("user/edit/save/{user}", "edit")->name("edit");
        Route::delete("/user/delete/{user}", "delete")->name("delete");
        Route::post("/user/logout", "logout")->name("logout");
    });

    Route::controller(CustomerController::class)->name("customer.")->group(function () {
        Route::get("/customer", "get")->name("get");
        Route::get("/customer/add", "addCustomerView")->name("add.view");
        Route::post("/customer/add/save", "add")->name("add");
        Route::get("/customer/edit/{customer}", "editCustomerView")->name("edit.view");
        Route::patch("/customer/edit/save/{customer}", "edit")->name("edit");
        Route::delete("/customer/delete/{customer}", "delete")->name("delete");
    });

    Route::controller(OrderController::class)->name("order.")->group(function () {
        Route::get("/order", "get")->name("get");
        Route::get("/order/add", "addOrderView")->name("add.view");
        Route::post("/order/add/save", "add")->name("add");
        Route::delete("/order/delete/{order}", "delete")->name("delete");
    });
});
