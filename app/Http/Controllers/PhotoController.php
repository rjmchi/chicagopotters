<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Album $album)
    {
        return view('admin.photo.new', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filename[]'=>'image|max:2048',
        ]);

        $album = Album::find($request->input('album_id'));

        foreach($request->file('filename') as $file) {

            $size = getimagesize($file);

            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$ext;            
            $path = $file->storeAs('public/photos/'.$request->input('album_slug'), $filenameToStore);

            $photo = new Photo;
            $photo->caption = $request->input('caption');
            $photo->filename = $filenameToStore;
            $photo->width = $size[0];
            $photo->height = $size[1];
            $photo->album_id = $request->input('album_id');
            $photo->save();            
        }

        // $filenameWithExt = $request->file('filename')->getClientOriginalName();
        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // $ext = $request->file('filename')->getClientOriginalExtension();
        // $filenameToStore = $filename.'_'.time().'.'.$ext;
        // $path = $request->file('filename')->storeAs('public/photos/'.$album->slug, $filenameToStore);
        

        return redirect('/album')->with('success', 'Photo Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album, Photo $photo)
    {
        return view('admin.photo.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album, Photo $photo)
    {
        if ($photo->caption != $request->input('caption')){
            $photo->caption = $request->input('caption');
            $photo->save();
        }
        return redirect(route('album.show', $photo->album_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album, Photo $photo)
    {
        $photo->delete();
        return redirect('/album');
    }
}
