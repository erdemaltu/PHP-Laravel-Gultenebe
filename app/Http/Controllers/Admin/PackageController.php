<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index',['packages'=>$packages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:packages,name_tr',
            'name_en' => 'required|string|max:255|unique:packages,name_en',
            'description_tr' => 'nullable|string',
            'description_en' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:500',
            'seo_keywords' => 'nullable|string|max:255',
            'price'=>'required',
        ]);

        $package= new Package;
        $package -> name_tr = $request->input('name_tr');
        $package -> name_en = $request->input('name_en');
        $package -> slug = Str::of($package->name_tr)->slug('-');
        $package -> description_tr = $request->input('description_tr');
        $package -> description_en = $request->input('description_en');
        $package -> seo_title = $request->input('seo_title');
        $package -> seo_description = $request->input('seo_description');
        $package -> seo_keywords = $request->input('seo_keywords');
        $package -> price = $request->input('price');
        $package->save();
        //toastr()->success('Başarılı', 'Sayfa başarıyla oluşturuldu.');
        return redirect()->route('packages.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.packages.edit',['package'=>$package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:packages,name_tr,' . $id,
            'name_en' => 'required|string|max:255|unique:packages,name_en,' . $id,
            'price'=>'required',
        ]);
        $package = Package::find($id);
        $package ->update($request->all());
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        //toastr()->success('Başarılı', 'Sayfa başarıyla silindi.');
        return redirect()->route('packages.index');
    }
}
