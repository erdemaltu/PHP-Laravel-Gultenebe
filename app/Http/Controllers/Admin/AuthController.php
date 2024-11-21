<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ContactForm;
use App\Models\Service;
use App\Models\Package;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $totalServices = Service::count();
        $activeServices = Service::where('active', 1)->count();
        $newMessage = ContactForm::where('status', 'Yeni')->count();
        $totalPackages = Package::count();

        return view('admin.homepage.index', compact('totalServices', 'activeServices', 'newMessage', 'totalPackages'));
    }

    public function login()
    {
        return view('admin.login.index');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                toastr()->success('Tekrardan hoşgeldiniz');
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'Girilen kimlik bilgileri kayıtlarımızla eşleşmiyor.',
            ]);
        }
        else
        {
            return view('admin.login.index');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
