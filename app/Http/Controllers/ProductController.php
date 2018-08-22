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
        
        $product = Product::where('id', $id)->firstOrFail()->get();
       // $products = Product::with('images')->firstOrFail()->get();
        $images = Image::where('product_id', $id)->firstOrFail()->get();


        //$products = $product->images;

        //return $product->images;

        //dd($product);

        return view('product-page', compact($product, $images));
    }


    public function search(Request $request) 
    {
        $query = $request->input('query');

        $products = Product::where('product_name', 'like', "%$query%")->get();

        return view('search-results')->with('products', $products);
    }
}
