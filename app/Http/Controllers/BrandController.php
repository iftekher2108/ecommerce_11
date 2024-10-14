<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function brand()
    {
        $brands = Brand::get();
        return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function brand_create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function brand_store(Request $request)
    {
        $request->validate([
            'image' => 'nullable',
            'name' => 'required|unique:categories',
            'status' => 'required'
        ]);

        $brand = new brand;
        if(isset($request->image)) {
            $path = 'brand';
            $filename = time().'.'. $request->image->extension();
            $request->image->storeAs($path,$filename,'public');
            $brand->image = $path.'/'.$filename;
        }
        $brand->name = $request->name;
        $brand->slug = Str::of($request->name)->slug('-');
        $brand->status = $request->status;
        $brand->save();

        return redirect()->route('brand.index')->with("success","brand added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
