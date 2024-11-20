<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function edit()
    {
        $about = AboutUs::firstOrCreate(['slug' => 'hakkimizda'], ['content_tr' => ''], ['content_en' => '']);
        return view('admin.about_us.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content_tr' => 'required|string',
            'content_en' => 'required|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:500',
            'seo_keywords' => 'nullable|string|max:255',
        ]);

        $about = AboutUs::first();
        $about->update($request->only('content_tr', 'content_en', 'seo_title', 'seo_description', 'seo_keywords'));
        toastr()->success('Hakkımızda başarıyla güncellendi.');
        return redirect()->route('about_us.edit');
    }
}
