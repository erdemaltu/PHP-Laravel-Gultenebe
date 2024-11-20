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

    public function aboutUs()
    {
        $about_us = AboutUs::first();
        return view('frontend.about_us.index',['about_us'=>$about_us]);
    }

    public function packages()
    {
        $packages = Package::all();
        return view('frontend.packages.index',['packages'=>$packages]);
    }

    public static function getServicesWithSubServices()
    {
        return Service::with('subServices')->where('active', 1)->get();
    }

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->where('active', 1)->firstOrFail();
        $subservices = $service->subServices()->where('active', 1)->get();

        return view('frontend.services.index', compact('service', 'subservices'));
    }

    public function subService($slug)
    {
        $subService = SubService::where('slug', $slug)->where('active', 1)->firstOrFail();

        return view('frontend.services.sub_service.index', compact('subService'));
    }

    public function contactForm()
    {
        return view('frontend.contact_form.index');
    }

    public function contactFormStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'nullable|email|max:50',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:255',
        ]);

        $validatedData['IP'] = $request->ip();
        $validatedData['status'] = 'Yeni';

        ContactForm::create($validatedData);

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
    }
}
