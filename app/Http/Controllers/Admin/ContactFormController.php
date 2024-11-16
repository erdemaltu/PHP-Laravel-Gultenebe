<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_forms = ContactForm::orderBy('created_at','desc')->get();
        return view('admin.contact_form.index',['contact_forms'=>$contact_forms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_form = ContactForm::find($id);
        $contact_form->status = 'Okundu';
        $contact_form->save();

        return view('admin.contact_form.edit',['contact_form'=>$contact_form]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact_form = ContactForm::find($id);
        $contact_form->note = $request->input('note');
        $contact_form->save();
        //toastr()->success('Başarılı', 'Mesaj notu başarıyla güncellendi.');
        return redirect()->route('contact_form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact_form  $contact_form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact_form = ContactForm::find($id);
        $contact_form->delete();
        //toastr()->success('Başarılı', 'Mesaj başarıyla silindi.');
        return redirect()->route('contact_form');
    }
}
