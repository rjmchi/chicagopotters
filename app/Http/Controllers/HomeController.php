<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Piece;
use App\Models\Picture;
use App\Models\Event;
use App\Models\Album;
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
        $data["artists"] = Artist::all();
        $data["categories"]= Category::all();
        return view('home')->with($data);
    }

    public function categories() {
        $data["categories"] = Category::all();
        $data["artists"] = Artist::all();

        return view('categories')->with($data);
    }

    public function links(){
        return view('links');
    }

    public function events() {
        $data['albums'] = Album::all();
        $data['events'] = Event::all();
        return view('events')->with($data);
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

    public function showAlbum($slug) {
        $album = Album::where('slug', $slug)->get()->first();
        return view('showalbum', compact('album'));
    }

    public function gallery(Request $request, $artist, $category, $show=null) {
        $piece = Piece::query();
        session(['artist' => $artist]);  
        session(['category' => $category]);        
        session(['show'=> 'all']);

        if ($artist > 0)
        {
            $data['artist'] = Artist::find($artist);
            $piece->where('artist_id', '=', $artist);
        } 

        if ($category)
        {
            $data['category'] = Category::where('slug', $category)->get()->first();
            $catpieces= $data['category']->pieces->pluck('id'); //get ids of all pieces in category
            $piece->whereHas('categories',function($query) use($catpieces ) {
                $query->whereIn('piece_id', $catpieces );
            });
        }

        if ($show != 'all') {
            $piece->where('price', '>', 0);
            $piece->where('sold', '=', false);
            $request->session()->forget('show');
        }

        $data['pieces'] = $piece->orderBy('id', 'desc')->get();
        return view('gallery')->with($data);
    }
    
    public function piece(Request $request, Piece $piece){
        $data['piece']= $piece;

        if ($request->session()->has('artist')) {
            $artist = session('artist');
        }else {
            $artist = 0;
        }
        if ($request->session()->has('category')) {
            $category = session('category');
        }else {
            $category = 0;
        }
        if ($request->session()->has('show')) {
            $show = session('show');
        }else {
            $show = 0;
        }          

        $data['piece']= $piece;
        $data['category']= $category;
        $data['artist']= $artist;
        $data['show']= $show;

        return view('piece')->with($data);
    }
}
