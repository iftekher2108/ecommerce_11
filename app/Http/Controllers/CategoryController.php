<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function category()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function category_create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function category_store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg|max:10000|nullable',
            'name' => 'string|required',
        ]);
        $category = new Category;
        if(isset($request->image)) {
            $path = 'category';
            $filename = $request->image->hashName().'.'. $request->image->extension();
            $request->image->storeAs($path,$filename,'public');
            $category->image = $request->image;
        }
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index')->with("success","Category added successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
