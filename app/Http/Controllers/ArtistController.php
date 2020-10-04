<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        return view('admin.artist.list', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artist.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'zip'=> 'required',
            'email'=> 'required | email',
            'password'=> 'required',
            'filename'=>'image|max:2048',
        ]);
        // dd($data);
        $u = [
            'name'=>$request->input('first_name'), 
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ];
        $user = \App\Models\User::create($u);

        $filenameWithExt = $request->file('picture')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $ext = $request->file('picture')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$ext;
        $path = $request->file('picture')->storeAs('public/images/', $filenameToStore);        

        $a = [
            'first_name'=> $request->input('first_name'),
            'middle_name'=> $request->input('middle_name'),
            'last_name'=> $request->input('last_name'),
            'phone'=> $request->input('phone'),
            'address'=> $request->input('address'),
            'city'=> $request->input('city'),
            'state'=> $request->input('state'),
            'zip'=> $request->input('zip'),
            'user_id'=> $user->id,
            'picture'=>$filenameToStore,
        ];

        $artist = Artist::create($a); 
        return redirect(route('artist.index'));      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
