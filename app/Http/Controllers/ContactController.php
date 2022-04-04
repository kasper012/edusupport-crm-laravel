<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Route;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact=new Contact();
        $contact->name=$name=$req->input('name');
        $contact->email=$email=$req->input('email');
        $contact->phone=$phone=$req->input('phone');
        $contact->email=$email=$req->input('email');
        $contact->country=$country=$req->input('country');
        $contact->school=$school=$req->input('school');
        $contact->speciality=$speciality=$req->input('speciality');
        $contact->degree=$degree=$req->input('degree');
        $contact->graduate_year=$graduate_year=$req->input('graduate_year');
        $contact->gpa=$gpa=$req->input('gpa');
        $contact->english_level=$english_level=$req->input('english_level');
        $contact->deutshche_level=$deutshche_level=$req->input('deutshche_level');
        $contact->save();
        return view('sales-view');
    }

    public function allData(){
        return view('messages', ['data'=>Contact::all()]);
    }

    public function UpdatePage($id){
        $contact = new Contact();
        return view('update', ['data'=>$contact->find($id)]);
    }

    public function Update($id, ContactRequest $req){
        $contact=new Contact();
        $contact->name=$name=$req->input('name');
        $contact->email=$email=$req->input('email');
        $contact->phone=$phone=$req->input('phone');
        $contact->email=$email=$req->input('email');
        $contact->country=$country=$req->input('country');
        $contact->school=$school=$req->input('school');
        $contact->speciality=$speciality=$req->input('speciality');
        $contact->degree=$degree=$req->input('degree');
        $contact->graduate_year=$graduate_year=$req->input('graduate_year');
        $contact->gpa=$gpa=$req->input('gpa');
        $contact->english_level=$english_level=$req->input('english_level');
        $contact->deutshche_level=$deutshche_level=$req->input('deutshche_level');
        $contact->save();
        return redirect()->route('contact-all');
    }

    public function DeleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact-all');
    }
}
