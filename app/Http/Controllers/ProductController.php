<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image;
use Illuminate\Support\Facades\Input;
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

    public function filter(Request $request, Product $products)
    {
        # List products based on their size

        //$products = $products->newQuery();

        //$query = $request->input('size');
         //dd($query);

        $products = Product::where(function($query) {

            $sizes = Input::has('size') ? Input::get('size') : [];
            $colors = Input::has('color') ? Input::get('color') : [];

            
            if (isset($sizes)) {
                foreach($sizes as $size) {
                    $query->where('size', '=', $size);
                }
            }

            if(isset($colors)) {
                foreach ($colors as $color) {
                    $query->where('color', '=', $color);
                }
            }

        })->get();


        // foreach ($query as $size) {
        //     var_dump($size);
        //     $products->where('size', 'like', "%$size")->get();
        // }

        // dd($products);
        //$products = Product::where('size', 'like', "%$query")->get();

        return view('filter-results', compact('products'));
    }
}
