<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubServiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\HomeController;

### Frontend ###

Route::get('/home', [HomeController::class, 'index'])->name('home');

### Admin ###
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
    Route::get('hizmetler-sıralama', [ServiceController::class, 'orders'])->name('services.order');
    Route::get('hizmetler-olusturma', [ServiceController::class, 'create'])->name('services.create');
    Route::post('hizmetler-olustur', [ServiceController::class, 'store'])->name('services.store');
    Route::get('hizmetler-duzenle-{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('hizmetler-guncelle-{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('hizmetler-sil-{id}', [ServiceController::class, 'destroy'])->name('services.delete');
    Route::get('hizmetler-switch', [ServiceController::class, 'switch'])->name('services.switch');
    #Subservices
    Route::get('althizmetler-olusturma-{id}', [SubServiceController::class, 'create'])->name('subservices.create');
    Route::get('althizmetler-sıralama', [SubServiceController::class, 'orders'])->name('subservices.order');
    Route::post('althizmetler-olustur-{id}', [SubServiceController::class, 'store'])->name('subservices.store');
    Route::get('althizmetler-duzenle-{id}', [SubServiceController::class, 'edit'])->name('subservices.edit');
    Route::post('althizmetler-guncelle-{id}', [SubServiceController::class, 'update'])->name('subservices.update');
    Route::get('althizmetler-sil-{id}', [SubServiceController::class, 'destroy'])->name('subservices.delete');
    Route::get('althizmetler-switch', [SubServiceController::class, 'switch'])->name('subservices.switch');
    Route::get('althizmetler-{id}', [SubServiceController::class, 'index'])->name('subservices.index');
    #Packages
    Route::get('paketler', [PackageController::class, 'index'])->name('packages.index');
    Route::get('paketler-olusturma', [PackageController::class, 'create'])->name('packages.create');
    Route::post('paketler-olustur', [PackageController::class, 'store'])->name('packages.store');
    Route::get('paketler-duzenle-{id}', [PackageController::class, 'edit'])->name('packages.edit');
    Route::post('paketler-guncelle-{id}', [PackageController::class, 'update'])->name('packages.update');
    Route::get('paketler-sil-{id}', [PackageController::class, 'destroy'])->name('packages.delete');
    #Contanct Form
    Route::get('gelen_kutusu', [ContactFormController::class, 'index'])->name('contant_form.index');
    Route::get('gelen_kutusu-duzenle-{id}', [ContactFormController::class, 'edit'])->name('contant_form.edit');
    Route::post('gelen_kutusu-guncelle-{id}', [ContactFormController::class, 'update'])->name('contant_form.update');
    Route::get('gelen_kutusu-sil-{id}', [ContactFormController::class, 'destroy'])->name('contant_form.delete');
    #Slider
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('slider-sıralama', [SliderController::class, 'orders'])->name('slider.order');
    Route::get('slider-olusturma', [SliderController::class, 'create'])->name('slider.create');
    Route::post('slider-olustur', [SliderController::class, 'store'])->name('slider.store');
    Route::get('slider-duzenle-{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('slider-guncelle-{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('slider-sil-{id}', [SliderController::class, 'destroy'])->name('slider.delete');
    Route::get('slider-switch', [SliderController::class, 'switch'])->name('slider.switch');
});
