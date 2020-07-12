<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $products = Product::all();
        return response()->json($products);
    }
    
    public function create(Request $request){
        $product = new Product;
        $product->products_name_before = $request->products_name_before;
        $product->products_name_after = $request->products_name_after;
        
        $product->save();
        return response()->json($product);
    }

    public function show($id){
        $product = Product::find($id);
        return response()->json($product);
    }

    //
}