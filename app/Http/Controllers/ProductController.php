<?php

namespace App\Http\Controllers;

use App\Product;
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
        
        $product = Product::where('id', $id)->firstOrFail();

        return view('product-page')->with(['product' => $product]);
    }


    public function search(Request $request) 
    {
        $query = $request->input('query');

        $products = Product::where('product_name', 'like', "%$query%")->get();

        return view('search-results')->with('products', $products);
    }
}
