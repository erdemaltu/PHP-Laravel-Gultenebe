<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('active',1)->orderBy('order','asc')->get();
        $services = Service::where('active',1)->orderBy('order','asc')->get();
        return view('frontend.homepage.index',['sliders'=>$sliders, 'services'=>$services]);
    }
}
