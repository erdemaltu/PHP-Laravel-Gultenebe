<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order','asc')->get();
        return view('admin.services.index', compact('services'));
    }

    public function orders(Request $request)
    {
        foreach($request->get('service') as $key => $order){
            Service::where('id',$order)->update(['order'=>$key]);
        }
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:services,name_tr',
            'name_en' => 'required|string|max:255|unique:services,name_en',
            'definition_tr' => 'nullable|string',
            'definition_en' => 'nullable|string',
            'description_tr' => 'nullable|string',
            'description_en' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:500',
            'seo_keywords' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $last=Service::orderBy('order','desc')->first();
        $service = new Service;
        $service -> name_tr = $request->input('name_tr');
        $service -> name_en = $request->input('name_en');
        $service -> slug = Str::of($service->name_tr)->slug('-');
        $service -> definition_tr = $request->input('definition_tr');
        $service -> definition_en = $request->input('definition_en');
        $service -> description_tr = $request->input('description_tr');
        $service -> description_en = $request->input('description_en');
        $service -> seo_title = $request->input('seo_title');
        $service -> seo_description = $request->input('seo_description');
        $service -> seo_keywords = $request->input('seo_keywords');
        $service->order=$last?$last->order+1:1;
        if($request->hasFile('image')){
            $destination = 'uploads/services/'.$service->image;               //
            if(File::exists($destination))                                    //
            {                                                                 //
                File::delete($destination);                                   //
            }                                                                 //File upload
            $file = $request->file('image');                                  //
            $extention = $file->getClientOriginalExtension();                 //
            $filename = time().'.'.$extention;                                //       
            $uploadPath = public_path('uploads/services');                    //
            $file->move($uploadPath, $filename);                              //
            //$image = Image::make($uploadPath . '/' . $filename);              //
            //$image->resize(600, 600);                                         //
            //$image->save();                                                   //
            $service -> image = $filename;
        }
        $service -> save();

        toastr()->success('Hizmet başarıyla eklendi.');
        return redirect()->route('services.index');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:services,name_tr,' . $id,
            'name_en' => 'required|string|max:255|unique:services,name_en,' . $id,
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:204',
        ]);
        $service = Service::findOrFail($id);

        if($request->hasFile('image')){

            $destination = 'uploads/services/'.$service->image;  //
            if(File::exists($destination))                                   //
            {                                                                //
                File::delete($destination);                                  //
            }                                                                //File upload
            $file = $request->file('image');                                 //
            $extention = $file->getClientOriginalExtension();                //
            $filename = time().'.'.$extention;                               //
            $uploadPath = public_path('uploads/services');        //
            $file->move($uploadPath, $filename);                             //
            $service -> image = $filename;                                   //
        }
        $service -> name_tr = $request->input('name_tr');
        $service -> name_en = $request->input('name_en');
        $service -> slug = Str::of($service->name_tr)->slug('-');
        $service -> definition_tr = $request->input('definition_tr');
        $service -> definition_en = $request->input('definition_en');
        $service -> description_tr = $request->input('description_tr');
        $service -> description_en = $request->input('description_en');
        $service -> seo_title = $request->input('seo_title');
        $service -> seo_description = $request->input('seo_description');
        $service -> seo_keywords = $request->input('seo_keywords');
        $service ->save();

        toastr()->success('Hizmet başarıyla güncellendi.');
        return redirect()->route('services.index');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $destination = 'uploads/services/'.$service->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $service->delete();
        toastr()->success('Hizmet başarıyla silindi.');
        return redirect()->back();
    }

    public function switch(Request $request)
    {
        $service = Service::findOrFail($request->id);
        $service->active = $request->statu == "1" ? True : False; 
        $service -> save();
    }
}
