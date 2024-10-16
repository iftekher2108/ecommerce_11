<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function category()
    {
        $categories = Category::get();
        return view('admin.category.index',compact('categories'));
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
            'image' => 'nullable',
            'name' => 'required|unique:categories',
            'status' => 'required'
        ]);

        $category = new Category;
        if(isset($request->image)) {
            $path = 'category';
            $filename = time().'.'. $request->image->extension();
            $request->image->storeAs($path,$filename,'public');
            $category->image = $path.'/'.$filename;
        }
        $category->name =Str::title($request->name);
        $category->slug = Str::of($request->name)->slug('-');
        $category->status = $request->status;
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
