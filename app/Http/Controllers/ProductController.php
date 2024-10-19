<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function product()
    {
        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function product_create()
    {
        $brands = Brand::where('status','active')->get(['id','name']);
        $categories = Category::where('status','active')->get(['id','name']);
        return view('admin.product.create',compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function product_store(Request $request)
    {
       $validate = $request->validate([
            'name' => 'string|required',
            'short_description' => 'string|nullable',
            'brand_id' => 'required|integer',
            'category_id' => 'required|integer',
            'sku' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|integer',
            'sale_price' => 'nullable|integer',
            'regular_price' => 'required',
            'image' => 'required|max:10000',
            'images' => 'nullable',
            'description' => 'nullable',
            'status' => 'required',
        ]);


        $product = new Product;
        $product->name = Str::title($request->name) ;
        $product->slug = Str::of($request->name)->slug('-');
        $product->short_description = $request->short_description;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->sku = Str::upper($request->sku);
        $product->stock_status = $request->stock_status;
        $product->quantity = $request->quantity;
        $product->sale_price = $request->sale_price;
        $product->regular_price = $request->regular_price;

        if(isset($request->image)) {
            $image_name = time().'.'.$request->image->extension();
            $directory = "product";
           $image_path = $request->image->storeAs($directory,$image_name,'public');
            $product->image = $image_path;
        }

        $imagePaths = [];

        if($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('product/images', $name, 'public');
                $imagePaths[] = $filePath;
            }
        // Save the paths as a comma-separated string
        $concatenatedPaths = implode(',', $imagePaths);
        $product->images = $concatenatedPaths;
        }
        $product->description = $request->description;
        $product->status = $request->status;
        $product->save();

        return redirect()->route('product.index')->with('success','Product Added Successfully');



    }


    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
