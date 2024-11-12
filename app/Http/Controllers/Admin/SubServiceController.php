<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubService;
use App\Models\Service;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    public function index(Service $service)
    {
        $subServices = $service->subServices;
        return view('admin.sub_services.index', compact('subServices', 'service'));
    }

    public function create(Service $service)
    {
        return view('admin.sub_services.create', compact('service'));
    }

    public function store(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:sub_services,slug',
            'definition' => 'nullable|string',
            'description' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:500',
            'seo_keywords' => 'nullable|string|max:255',
        ]);

        $service->subServices()->create($request->all());
        return redirect()->route('admin.services.sub_services.index', $service)->with('success', 'Alt hizmet başarıyla eklendi.');
    }

    public function edit(Service $service, SubService $subService)
    {
        return view('admin.sub_services.edit', compact('service', 'subService'));
    }

    public function update(Request $request, Service $service, SubService $subService)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:sub_services,slug,' . $subService->id,
            'definition' => 'nullable|string',
            'description' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:500',
            'seo_keywords' => 'nullable|string|max:255',
        ]);

        $subService->update($request->all());
        return redirect()->route('admin.services.sub_services.index', $service)->with('success', 'Alt hizmet başarıyla güncellendi.');
    }

    public function destroy(Service $service, SubService $subService)
    {
        $subService->delete();
        return redirect()->route('admin.services.sub_services.index', $service)->with('success', 'Alt hizmet başarıyla silindi.');
    }
}
