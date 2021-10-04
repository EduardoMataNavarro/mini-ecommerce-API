<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function Index() {
        return response()->json(Product::with('ProductImage')->get());
    }

    function GetById($slug) {
        return response()->json(
            Product::where('slug', $slug)
                    ->with('ProductCategory')
                    ->with('ProductImage')
                    ->first());
    }

    function Edit(Product $product, Request $request) {
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->slug = $request->input('slug');
        $product->description = $request->input('description');
        $product->active = $request->input('active');
        $product->category_id = $request->input('category_id');
        $product->save();

        return response()->json($product);
    }

    function GetWithImages($id) {
       return response()->json(Product::find($id)->first()->with('images'));
    }
}
