<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubServiceController;

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/giris', [AuthController::class, 'login'])->name('login');
Route::post('/giriskontrol', [AuthController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/cıkıs', [AuthController::class, 'logout'])->name('admin_logout');

Route::group(['middleware'=> ['auth:sanctum']],function () {
    #Homepage
    Route::get('admin', [AuthController::class, 'index'])->name('admin_home');
    #About-us
    Route::get('/hakkimizda', [AboutUsController::class, 'edit'])->name('about_us.edit');
    Route::post('/hakkimizda', [AboutUsController::class, 'update'])->name('about_us.update');
    #Services
    Route::get('hizmetler', [ServiceController::class, 'index'])->name('services.index');
    Route::get('althizmetler-olusturma-{id}', [ServiceController::class, 'children_create'])->name('services.children_create');
    Route::get('althizmetler-{id}', [ServiceController::class, 'children'])->name('services.children');
    Route::get('hizmetler-olusturma', [ServiceController::class, 'create'])->name('services.create');
    Route::post('hizmetler-olustur', [ServiceController::class, 'store'])->name('services.store');
    Route::post('hizmetler-olustur-{id}', [ServiceController::class, 'children_store'])->name('services.children_store');
    Route::get('hizmetler-duzenle-{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('hizmetler-guncelle-{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('hizmetler-sil-{id}', [ServiceController::class, 'destroy'])->name('services.delete');
    Route::get('hizmetler-switch', [ServiceController::class, 'switch'])->name('services.switch');
    Route::get('/cosmetic/category/show', [ServiceController::class, 'show'])->name('services.show');
});
