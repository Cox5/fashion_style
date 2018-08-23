<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image;
use Illuminate\Http\Request;

use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::latest()->get();

        //dump($products);

        return view('product-overview', compact('products'));

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    #show product by its ID from database , related to product-page view
     public function show($id)
    {
    
        $product = Product::where('id', $id)->first();
        $images = $product->images();

        return view('product-page', compact('product', 'images'));
    }


    public function search(Request $request) 
    {
        $query = $request->input('query');

        $products = Product::where('product_name', 'like', "%$query%")->get();
        //$images = $products->images();

        return view('search-results', compact('products'));
    }

    public function filter(Request $request)
    {
        $query = $request->input('size');

        $products = Product::where('size', 'like', "%$query")->get();

        return view('filter-results', compact('products'));
    }
}
