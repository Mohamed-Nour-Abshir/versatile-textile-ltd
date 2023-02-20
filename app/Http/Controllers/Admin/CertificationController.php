<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifications = Certificate::all();
        return view('admin.certifications.certificartion-component',compact('certifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certifications.create-certificartion-component');
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
        $certification = new Certificate();
        $certification->title = $request->title;
        $certification->description = $request->description;
        // $certification->image = $request->image;

        $imagename = Carbon::now()->timestamp.'.'. $request->image->extension();
        $request->image->storeAs('Certifications',$imagename);
        $certification->image = $imagename;

        $certification->save();
        return redirect()->route('certifications.index')->with('message', 'Certificate has been added successfully');
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
        $certification = Certificate::find($id);
        return view('admin.certifications.edit-certificartion-component',compact('certification'));
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
        $Certification = Certificate::find($id);
        $Certification->title = $request->title;
        $Certification->description = $request->description;

        if($request->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $request->newimage->extension();
            $request->newimage->storeAs('Certifications',$imagename);
            $Certification->image = $imagename;
        }
        $Certification->update();
        return redirect()->route('certifications.index')->with('message', 'Certificate has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certification = Certificate::find($id);
        $certification->delete();
        return redirect()->route('certifications.index')->with('message', 'Certificate has been deleted successfully');
    }
}
