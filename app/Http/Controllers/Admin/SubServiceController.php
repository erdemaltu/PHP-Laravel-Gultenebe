<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;

class SubServiceController extends Controller
{
    public function index($id)
    {
        $service = Service::findOrFail($id);
        $subservices = SubService::where('service_id',$id)->orderBy('created_at','desc')->get();
        return view('admin.services.sub_services.index', compact('subservices', 'service'));
    }

    public function create($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.sub_services.create', compact('service'));
    }

    public function store(Request $request,$id)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:sub_services,name_tr',
            'name_en' => 'required|string|max:255|unique:sub_services,name_en',
            'definition_tr' => 'nullable|string',
            'definition_en' => 'nullable|string',
            'description_tr' => 'nullable|string',
            'description_en' => 'nullable|string',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:500',
            'seo_keywords' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $subservices = new SubService;
        $subservices -> name_tr = $request->input('name_tr');
        $subservices -> name_en = $request->input('name_en');
        $subservices -> service_id = $id;
        $subservices -> slug = Str::of($subservices->name_tr)->slug('-');
        $subservices -> definition_tr = $request->input('definition_tr');
        $subservices -> definition_en = $request->input('definition_en');
        $subservices -> description_tr = $request->input('description_tr');
        $subservices -> description_en = $request->input('description_en');
        $subservices -> seo_title = $request->input('seo_title');
        $subservices -> seo_description = $request->input('seo_description');
        $subservices -> seo_keywords = $request->input('seo_keywords');
        if($request->hasFile('image')){
            $destination = 'uploads/services/subservices/'.$subservices->image;               //
            if(File::exists($destination))                                    //
            {                                                                 //
                File::delete($destination);                                   //
            }                                                                 //File upload
            $file = $request->file('image');                                  //
            $extention = $file->getClientOriginalExtension();                 //
            $filename = time().'.'.$extention;                                //       
            $uploadPath = public_path('uploads/services/subservices');                    //
            $file->move($uploadPath, $filename);                              //
            //$image = Image::make($uploadPath . '/' . $filename);              //
            //$image->resize(600, 600);                                         //
            //$image->save();                                                   //
            $subservices -> image = $filename;
        }
        $subservices -> save();

        return redirect()->route('subservices.index', ['id'=>$id])->with('success', 'Alt hizmet başarıyla eklendi.');
    }

    public function edit($id)
    {
        $subservice = SubService::find($id);
        return view('admin.services.sub_services.edit', compact('subservice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:sub_services,name_tr,' . $id,
            'name_en' => 'required|string|max:255|unique:sub_services,name_en,' . $id,
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:204',
        ]);
        $subservice = SubService::findOrFail($id);

        if($request->hasFile('image')){

            $destination = 'uploads/services/subservices/'.$subservice->image;  //
            if(File::exists($destination))                                   //
            {                                                                //
                File::delete($destination);                                  //
            }                                                                //File upload
            $file = $request->file('image');                                 //
            $extention = $file->getClientOriginalExtension();                //
            $filename = time().'.'.$extention;                               //
            $uploadPath = public_path('uploads/services/subservices');        //
            $file->move($uploadPath, $filename);                             //
            $subservice -> image = $filename;                                   //
        }
        $subservice -> name_tr = $request->input('name_tr');
        $subservice -> name_en = $request->input('name_en');
        $subservice -> slug = Str::of($subservice->name_tr)->slug('-');
        $subservice -> definition_tr = $request->input('definition_tr');
        $subservice -> definition_en = $request->input('definition_en');
        $subservice -> description_tr = $request->input('description_tr');
        $subservice -> description_en = $request->input('description_en');
        $subservice -> seo_title = $request->input('seo_title');
        $subservice -> seo_description = $request->input('seo_description');
        $subservice -> seo_keywords = $request->input('seo_keywords');
        $subservice ->save();
        return redirect()->route('subservices.index', $subservice->service_id)->with('success', 'Alt hizmet başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $subservice = SubService::find($id);
        $destination = 'uploads/services/subservices/'.$subservice->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $subservice->delete();
        
        return redirect()->back();
    }

    public function switch(Request $request)
    {
        $subservice = SubService::findOrFail($request->id);
        $subservice->active = $request->statu == "1" ? True : False; 
        $subservice -> save();
    }
}
