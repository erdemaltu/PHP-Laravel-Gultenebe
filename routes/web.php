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
    Route::get('hizmetler-olusturma', [ServiceController::class, 'create'])->name('services.create');
    Route::post('hizmetler-olustur', [ServiceController::class, 'store'])->name('services.store');
    Route::get('hizmetler-duzenle-{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('hizmetler-guncelle-{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('hizmetler-sil-{id}', [ServiceController::class, 'destroy'])->name('services.delete');
    Route::get('hizmetler-switch', [ServiceController::class, 'switch'])->name('services.switch');
    #Subservices
    Route::get('althizmetler-olusturma-{id}', [SubServiceController::class, 'create'])->name('subservices.create');
    Route::post('althizmetler-olustur-{id}', [SubServiceController::class, 'store'])->name('subservices.store');
    Route::get('althizmetler-duzenle-{id}', [SubServiceController::class, 'edit'])->name('subservices.edit');
    Route::post('althizmetler-guncelle-{id}', [SubServiceController::class, 'update'])->name('subservices.update');
    Route::get('althizmetler-sil-{id}', [SubServiceController::class, 'destroy'])->name('subservices.delete');
    Route::get('althizmetler-switch', [SubServiceController::class, 'switch'])->name('subservices.switch');
    Route::get('althizmetler-{id}', [SubServiceController::class, 'index'])->name('subservices.index');
});
