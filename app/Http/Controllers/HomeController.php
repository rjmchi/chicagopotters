<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function categories() {
        return view('categories');
    }

    public function links(){
        return view('links');
    }

    public function events() {
        return view('events');
    }

    public function contact() {
        $artists = Artist::all();
        return view('contact', compact('artists'));
    }  
    
    public function mail(Artist $artist) {
        return view('mail', compact('artist'));
    }

    public function sendMail(Request $request) {
        $data = request()->validate([
            'email'=> 'required',
            'message'=> 'required',
        ]);

        $data['name'] = $request->input('name');

        $artist = Artist::find($request->input('artist'));
        $data['toemail'] = $artist->user->email;

        Mail::to('robert@chicagopotters.com')->send(new ContactMail($data));
        return redirect('/contact')->withSuccess('Message Sent');
    }
}
