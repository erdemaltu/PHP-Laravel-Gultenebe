<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('order','asc')->get();
        return view('admin.slider.index',['sliders'=>$sliders]);
    }

    public function orders(Request $request)
    {
        foreach($request->get('slider') as $key => $order){
            Slider::where('id',$order)->update(['order'=>$key]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'name_tr' => 'required|string|max:255|unique:sliders,name_tr',
            'name_en' => 'required|string|max:255|unique:sliders,name_en',
            'description_tr' => 'nullable|string',
            'description_en' => 'nullable|string',
        ]);

        if($request->hasFile('image')){

            $last=Slider::orderBy('order','desc')->first();
            $slider = new Slider;
            $slider -> name_tr = $request->input('name_tr');
            $slider -> name_en = $request->input('name_en');
            $slider -> description_tr = $request->input('description_tr');
            $slider -> description_en = $request->input('description_en');
            $slider->order=$last?$last->order+1:1;
            $destination = 'uploads/sliders/'.$slider->image;//
            if(File::exists($destination))                       //
            {                                                    //
                File::delete($destination);                      //
            }                                                    //File upload
            $file = $request->file('image');                     //
            $extention = $file->getClientOriginalExtension();    //
            $filename = time().'.'.$extention;                   //
            $uploadPath = public_path('uploads/sliders');      //
            $file->move($uploadPath, $filename);                 //                                    //
            $slider -> image = $filename;                      //
            $slider -> save();
            toastr()->success('Slider başarıyla eklendi.');
            return redirect()->route('slider.index');
        }
        else{

            Slider::create($request->all());
            toastr()->success('Slider başarıyla eklendi.');
            return redirect()->route('slider.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',['slider'=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_tr' => 'required|string|max:255|unique:sliders,name_tr,' . $id,
            'name_en' => 'required|string|max:255|unique:sliders,name_en,' . $id,
            'description_tr' => 'nullable|string',
            'description_en' => 'nullable|string',
        ]);

        $slider = Slider::find($id);

        if($request->hasFile('image')){

            $slider -> name_tr = $request->input('name_tr');
            $slider -> name_en = $request->input('name_en');
            $slider -> description_tr = $request->input('description_tr');
            $slider -> description_en = $request->input('description_en');
            $destination = 'uploads/sliders/'.$slider->image;//
            if(File::exists($destination))                       //
            {                                                    //
                File::delete($destination);                      //
            }                                                    //File upload
            $file = $request->file('image');                     //
            $extention = $file->getClientOriginalExtension();    //
            $filename = time().'.'.$extention;                   //
            $uploadPath = public_path('uploads/sliders');      //
            $file->move($uploadPath, $filename);                 //                                    //
            $slider -> image = $filename;                      //
            $slider -> save();
            toastr()->success('Slider başarıyla güncellendi.');
            return redirect()->route('slider.index');

        }
        else{
            $slider ->update($request->all());
            toastr()->success('Slider başarıyla güncellendi.');
            return redirect()->route('slider.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $destination = 'uploads/sliders/'.$slider->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $slider->delete();
        toastr()->success('Slider başarıyla silindi.');
        return redirect()->route('slider.index');
    }

    public function switch(Request $request)
    {
        $slider = Slider::findOrFail($request->id);
        $slider -> active = $request->statu == "1" ? True : False; 
        $slider -> save();

    }
}
