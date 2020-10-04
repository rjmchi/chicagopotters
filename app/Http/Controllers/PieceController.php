<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use App\Models\Picture;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['artists'] = Artist::all();
        $data['categories'] = Category::all();
        return view('admin.piece.new')->with($data);
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
            'title'=> 'required',
            'description'=>'required',
            'dimensions'=> 'required',
            'categories'=> 'required'
        ]);

        $p = new Piece;
        $p->title = $data['title'];
        $p->description = $data['description'];
        $p->dimensions = $data['dimensions'];
        $p->artist_id = $request->input('artist');

        if ($request->input('price')){
            $p->price = $request->input('price');
        }        

        if ($request->input('weight')){
            $p->price = $request->input('weight');
        }
        $p->save();

        $main = true;
       foreach($request->file('pictures') as $file) {
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$ext;            
            $path = $file->storeAs('public/images'.$request->input('artist'), 
            $filenameToStore);
            $pic = new Picture;
            $pic->file_name = $filenameToStore;
            $pic->original_name = $filenameWithExt;
            $pic->main_image = $main;
            $main = false;
            $pic->piece_id = $p->id;
            $pic->save();
        } 
        foreach ($data['categories'] as $cat) {
            $c = Category::find($cat);
            $p->categories()->attach($c);
        }

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function show(Piece $piece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function edit(Piece $piece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piece $piece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piece $piece)
    {
        //
    }
}
