<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.product-component',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create-product-component');
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
            'fabric' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'product_type' => 'required',
            'image' => 'required',
        ]);
        $product = new Product();
        $product->fabric = $request->fabric;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->product_type = $request->product_type;

        $imagename = Carbon::now()->timestamp.'.'. $request->image->extension();
        $request->image->storeAs('Products',$imagename);
        $product->image = $imagename;

        $product->save();
        return redirect()->route('products.index')->with('message', 'Product has been added successfully');
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
        $product = Product::find($id);
        return view('admin.products.edit-product-component',compact('product'));
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
        $product = Product::find($id);
        $product->fabric = $request->fabric;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->product_type = $request->product_type;

        if($request->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $request->newimage->extension();
            $request->newimage->storeAs('Products',$imagename);
            $product->image = $imagename;
        }

        $product->update();
        return redirect()->route('products.index')->with('message', 'Product has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Product has been deleted successfully');
    }
}
