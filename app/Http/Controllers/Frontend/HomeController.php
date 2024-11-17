<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Package;
use App\Models\ContactForm;
use App\Models\Service;
use App\Models\SubService;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('active',1)->orderBy('order','asc')->get();
        $services = Service::where('active',1)->orderBy('order','asc')->get();
        return view('frontend.homepage.index',['sliders'=>$sliders, 'services'=>$services]);
    }

    public function about_us()
    {
        $about_us = AboutUs::first();
        return view('frontend.about_us.index',['about_us'=>$about_us]);
    }

    public function packages()
    {
        $packages = Package::all();
        return view('frontend.packages.index',['packages'=>$packages]);
    }

    public function contact_form()
    {
        return view('frontend.contact_form.index');
    }
}
