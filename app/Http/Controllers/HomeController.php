<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('status', 'active')->orderBy('created_at','desc')->paginate(12);
        return view('store.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function category_search($slug)
    {
        $categories = Category::where('status', 'active')->get(['name','slug']);
        $search_category = Category::with('product')->where('slug',$slug)->first();
        return view('store.category_search.shop',compact('search_category','categories'));
    }



    public function product_detail($slug) {
        $product = Product::where('slug', $slug)->first();
        $side_products = Product::where('status','active')->where('slug','!=',$slug)->inRandomOrder('id')->get()->take(8);
        return view('store.product-detail',compact('product','side_products'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
