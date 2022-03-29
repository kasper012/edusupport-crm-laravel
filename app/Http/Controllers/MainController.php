<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }


    public function review_check(Request $request) {

        $review = new Contact;
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

    }
}
