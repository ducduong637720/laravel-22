<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProdCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodcategories = ProdCategory::all();
        $products = Product::get();
        return view('frontend.products.index')->with([
            'products' => $products,
            'prodcategories' => $prodcategories,
        ]);
    }
    public function list()
    {
        $products = Product::get();
        $prodcategories = ProdCategory::get();
        return view('frontend.products.list')->with([
            'products' => $products,
            'prodcategories' => $prodcategories
        ]);
    }
    public function prods_category($id){
        $prodcategories = ProdCategory::get();
        $products = Product::where('category_id', $id)->get();

        return view('frontend.products.list')->with([
            'products' => $products,
            'prodcategories' => $prodcategories,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('frontend.products.show')->with([
            'product' => $product
        ]);
    }

}
