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

Route::get('/anasayfa', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/paketler', [HomeController::class, 'packages'])->name('packages');
Route::get('/hizmet/{slug}', [HomeController::class, 'service'])->name('services');
Route::get('/alt-hizmet/{slug}', [HomeController::class, 'subService'])->name('subservices');
Route::get('/iletisim', [HomeController::class, 'contactForm'])->name('contact_form');
Route::post('/iletisim', [HomeController::class, 'contactFormStore'])->name('contact_form.store');
#Lang
Route::get('locale/{lang}', [HomeController::class, 'setLocale'])->name('lang');

### Admin ###
//login
Route::get('/giris', [AuthController::class, 'login'])->name('login');
Route::post('/giriskontrol', [AuthController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/cıkıs', [AuthController::class, 'logout'])->name('admin_logout');

Route::group(['middleware'=> ['auth:sanctum']],function () {
    #Homepage
    Route::get('admin', [AuthController::class, 'index'])->name('admin_home');
    #About-us
    Route::get('admin-hakkimizda', [AboutUsController::class, 'edit'])->name('about_us.edit');
    Route::post('admin-hakkimizda', [AboutUsController::class, 'update'])->name('about_us.update');
    #Services
    Route::get('admin-hizmetler', [ServiceController::class, 'index'])->name('services.index');
    Route::get('admin-hizmetler-sıralama', [ServiceController::class, 'orders'])->name('services.order');
    Route::get('admin-hizmetler-olusturma', [ServiceController::class, 'create'])->name('services.create');
    Route::post('admin-hizmetler-olustur', [ServiceController::class, 'store'])->name('services.store');
    Route::get('admin-hizmetler-duzenle-{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('admin-hizmetler-guncelle-{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('admin-hizmetler-sil-{id}', [ServiceController::class, 'destroy'])->name('services.delete');
    Route::get('admin-hizmetler-switch', [ServiceController::class, 'switch'])->name('services.switch');
    #Subservices
    Route::get('admin-althizmetler-olusturma-{id}', [SubServiceController::class, 'create'])->name('subservices.create');
    Route::get('admin-althizmetler-sıralama', [SubServiceController::class, 'orders'])->name('subservices.order');
    Route::post('admin-althizmetler-olustur-{id}', [SubServiceController::class, 'store'])->name('subservices.store');
    Route::get('admin-althizmetler-duzenle-{id}', [SubServiceController::class, 'edit'])->name('subservices.edit');
    Route::post('admin-althizmetler-guncelle-{id}', [SubServiceController::class, 'update'])->name('subservices.update');
    Route::get('admin-althizmetler-sil-{id}', [SubServiceController::class, 'destroy'])->name('subservices.delete');
    Route::get('admin-althizmetler-switch', [SubServiceController::class, 'switch'])->name('subservices.switch');
    Route::get('admin-althizmetler-{id}', [SubServiceController::class, 'index'])->name('subservices.index');
    #Packages
    Route::get('admin-paketler', [PackageController::class, 'index'])->name('packages.index');
    Route::get('admin-paketler-olusturma', [PackageController::class, 'create'])->name('packages.create');
    Route::post('admin-paketler-olustur', [PackageController::class, 'store'])->name('packages.store');
    Route::get('admin-paketler-duzenle-{id}', [PackageController::class, 'edit'])->name('packages.edit');
    Route::post('admin-paketler-guncelle-{id}', [PackageController::class, 'update'])->name('packages.update');
    Route::get('admin-paketler-sil-{id}', [PackageController::class, 'destroy'])->name('packages.delete');
    #Contanct Form
    Route::get('admin-gelen_kutusu', [ContactFormController::class, 'index'])->name('contant_form.index');
    Route::get('admin-gelen_kutusu-duzenle-{id}', [ContactFormController::class, 'edit'])->name('contant_form.edit');
    Route::post('admin-gelen_kutusu-guncelle-{id}', [ContactFormController::class, 'update'])->name('contant_form.update');
    Route::get('admin-gelen_kutusu-sil-{id}', [ContactFormController::class, 'destroy'])->name('contant_form.delete');
    #Slider
    Route::get('admin-slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('admin-slider-sıralama', [SliderController::class, 'orders'])->name('slider.order');
    Route::get('admin-slider-olusturma', [SliderController::class, 'create'])->name('slider.create');
    Route::post('admin-slider-olustur', [SliderController::class, 'store'])->name('slider.store');
    Route::get('admin-slider-duzenle-{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('admin-slider-guncelle-{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('admin-slider-sil-{id}', [SliderController::class, 'destroy'])->name('slider.delete');
    Route::get('admin-slider-switch', [SliderController::class, 'switch'])->name('slider.switch');
});
