<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\ContactUs;
use App\OurCommitment;

class PostController extends Controller
{
     public function homeindex(){
        $about = About::all();
        $commitments = OurCommitment::all();
        return view('Home.index', ['about' => $about, 'ourcommitment' => $commitments]);
    }

    public function submitcontactus(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|E-Mail',
            'subject' => 'required',
            'message' => 'required|max:300'
        ]);

        $contacts = new ContactUs([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject-msg'),
            'message' => $request->input('comment')
        ]);

        $contacts->save();
        return redirect()->route('home.index')->with('info', 'form successfully submitted, we will get back to you within soon');
    }
}
