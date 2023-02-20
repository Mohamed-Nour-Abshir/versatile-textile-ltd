<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.gallery-component',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create-gallery-component');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $gallery = new Gallery();
        $gallery->name = $request->name;

        $imagename = Carbon::now()->timestamp.'.'. $request->image->extension();
        $request->image->storeAs('Gallery',$imagename);
        $gallery->image = $imagename;

        $gallery->save();
        return redirect()->route('galleries.index')->with('message', 'Gallery has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit-gallery-component',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->name = $request->name;

        if($request->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $request->newimage->extension();
            $request->newimage->storeAs('Gallery',$imagename);
            $gallery->image = $imagename;
        }
        $gallery->update();
        return redirect()->route('galleries.index')->with('message', 'Gallery has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('galleries.index')->with('message', 'Gallery has been deleted successfully');
    }
}
