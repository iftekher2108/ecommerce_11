<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use function Termwind\render;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function shop_index()
    {
        $categories = Category::where('status','active')->get(['name','slug']);
        $products = Product::where('status','active')->paginate(9);
        return view('store.shop',compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function quick_shop_preview(Request $request)
    {
        $product = Product::with('category', 'brand')->find($request->id);

        $product_model = view('components.store.product-model',compact('product'))->render();

        return response()->json(['product_model' => $product_model]);

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
