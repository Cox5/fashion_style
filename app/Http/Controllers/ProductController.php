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

        # List latest products first on product-overview page
        $products = Product::latest()->get();

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
    
        # Get selected product and associate it with its respective images
        $product = Product::where('id', $id)->first();
        $images = $product->images();

        return view('product-page', compact('product', 'images'));
    }


    public function search(Request $request) 
    {
        # Get the query from search box
        $query = $request->input('query');

        # Search for all occurrences with LIKE selector
        $products = Product::where('product_name', 'like', "%$query%")->get();

        return view('search-results', compact('products'));
    }

    public function filter(Request $request)
    {
        # List products based on their size
        $query = $request->input('size');

        $products = Product::where('size', 'like', "%$query")->get();

        return view('filter-results', compact('products'));
    }
}
