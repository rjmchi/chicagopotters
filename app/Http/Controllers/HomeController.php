<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Piece;
use App\Models\Picture;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Event;
use App\Models\Album;
use App\Mail\ContactMail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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
        $data['albums'] = Album::orderBy('id', 'desc')->get();
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
            $data['show'] = 'forsale';
        } else {
            $data['show'] = 'all';
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
    public function order(Piece $piece){
        if (session()->has('customer')){
            $cid = session('customer');
            $data['customer'] = Customer::find($cid);
        }
        $data['piece'] = $piece;
        return view('order')->with($data);
    }

    public function processOrder(Request $request) {
        request()->validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'phone'=> 'required',
            'email'=> 'required | email',
        ]);
        $cust = Customer::where('first_name', 'like', $request->firstname)
            ->where('last_name', 'like', $request->lastname)
            ->where('email', 'like', $request->email)
            ->first();

        if (!$cust) {
            $cust = new Customer;
            $cust->first_name = $request->firstname;
            $cust->last_name = $request->lastname;
            $cust->phone = $request->phone;
            $cust->email = $request->email;
            if ($request->address){
                $cust->address = $request->address;
            }
            if ($request->city){
                $cust->city = $request->city;
            }
            if ($request->state){
                $cust->state = $request->state;
            }
            if ($request->zip){
                $cust->zip = $request->zip;
            }
            $cust->save();
        }
        session(['customer'=> $cust->id]);
        $o = new Order;
        $o->customer_id = $cust->id;
        $o->order_date = Carbon::now();
        $o->piece_id = $request->pieceid;
        $o->special_instructions = $request->specialinstructions;
        $o->save();
        $p = Piece::find($request->pieceid);
        $p->sold = true;
        $p->save();

        $data['order'] = $o;
        Mail::to($o->piece->artist->user->email)->send(new OrderMail($data));
        return redirect('/')->withSuccess('Thank you for your order.  You will be contacted soon'); 
    }

}
