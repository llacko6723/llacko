<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\CheckUserLoggedIn;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PHPUnit\Architecture\Services\ServiceContainer;


Route::get('/', function () {
    return view('template');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get("/usluge",[ServiceController::class, "usluge"])->name('usluge');
Route::get("opsirnije/{id}", [ServiceController::class, "opsirnije"])->name("opsirnije");


Route::middleware(CheckUserLoggedIn::class)->group(function(){
    Route::redirect('/admin', '/admin/login');
    Route::redirect('/login', '/admin/login');
    Route::get("/admin/login", [AuthController::class, "login"])->name("login");
    Route::post("/admin/login", [AuthController::class, "storeLogin"])->name("storeLogin");


    Route::get("/admin/register", [AuthController::class, "register"])->name("register");
    Route::post("/admin/register", [AuthController::class, "storeRegister"])->name("storeRegister");


});

Route::get("/admin/logout", [AuthController::class, "logout"])->name("logout");

Route::get("/admin/not-auth", [AuthController::class, "notAuth"])->name("not-auth");


Route::middleware(AuthMiddleware::class)->group(function(){
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get("/admin/list",[ServiceController::class, "list"])->name('service.list');
    Route::get("/admin/add-service", [ServiceController::class, "create"])->name("service.create");
    Route::post("/admin/add-service", [ServiceController::class, "store"])->name("service.store");
    Route::get("/admin/edit-service/{id}", [ServiceController::class, "edit"])->name("service.edit");
    Route::post("/admin/edit-service/{id}", [ServiceController::class, "update"])->name("service.update");
    Route::get("/admin/delete-service/{id}", [ServiceController::class, "delete"])->name("service.delete");
    Route::post("/admin/delete-service/{id}", [ServiceController::class, "destroy"])->name("service.destroy");

    Route::get("/admin/listw", [WorkerController::class, "listw"])->name("worker.list");
    Route::get("/admin/add-worker", [WorkerController::class, "create"])->name("worker.create");
    Route::post("/admin/add-worker", [WorkerController::class, "store"])->name("worker.store");
    Route::get("/admin/edit-worker/{id}", [WorkerController::class, "edit"])->name("worker.edit");
    Route::post("/admin/edit-worker/{id}", [WorkerController::class, "update"])->name("worker.update");
    Route::get("/admin/delete-worker/{id}", [WorkerController::class, "delete"])->name("worker.delete");
    Route::post("/admin/delete-worker/{id}", [WorkerController::class, "destroy"])->name("worker.destroy");

    Route::get("/admin/listu", [UserController::class, "listu"])->name("user.list");
    Route::get("/admin/add-user", [UserController::class, "create"])->name("user.create");
    Route::post("/admin/add-user", [UserController::class, "store"])->name("user.store");
    Route::get("/admin/edit-user/{id}", [UserController::class, "edit"])->name("user.edit");
    Route::post("/admin/edit-user/{id}", [UserController::class, "update"])->name("user.update");
    Route::get("/admin/delete-user/{id}", [UserController::class, "delete"])->name("user.delete");
    Route::post("/admin/delete-user/{id}", [UserController::class, "destroy"])->name("user.destroy");


});
