<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = HomeSlider::paginate(10);
        return view('admin.homeSilder.home-sliders-component', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeSilder.create-home-sliders-component');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $slider = new HomeSlider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        // $slider->image = $request->image;

        $imagename = Carbon::now()->timestamp.'.'. $request->image->extension();
        $request->image->storeAs('HomeSliders',$imagename);
        $slider->image = $imagename;

        $slider->save();
        return redirect()->route('sliders.index')->with('message', 'Home Slider has been added successfully');
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
        $slider = HomeSlider::find($id);
        return view('admin.homeSilder.edit-home-sliders-component',compact('slider'));
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
        $slider = HomeSlider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;

        if($request->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $request->newimage->extension();
            $request->newimage->storeAs('HomeSliders',$imagename);
            $slider->image = $imagename;
        }
        $slider->update();
        return redirect()->route('sliders.index')->with('message', 'Home Slider has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = HomeSlider::find($id);
        $slider->delete();
        return redirect()->route('sliders.index')->with('message', 'Home Slider has been deleted successfully');
    }
}
