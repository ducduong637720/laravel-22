<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use App\Models\Order;
use App\Models\ProdCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::Paginate(6);
        return view('backend.products.index')->with([
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodCategories = ProdCategory::all();
        return view('backend.products.create')->with([
            'prodCategories' => $prodCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $product = new Product();
        $product->name = $data['name'];
        $product->quatity = $data['quatity'];
        $product->content = $data['content'];
        $product->orgin_price = $data['orgin_price'];
        $product->sale_price = $data['sale_price'];
        $product->category_id = $data['prodcategory'];
        $product->brand_id = 1;
        $product->status = $data['status'];
        $product->view_count = 200;
        $product->sale_count = 3000;
        $product->review_count = 120;
        $product->user_id = auth()->user()->id;
        if ($request->hasFile('info')) {
            $disk = 'product';
            $path = $request->file('info')->store('prods', $disk);
            $product->disk = $disk;
            $product->path = $path;
        }
        $product->save();
        $request->session()->flash('success', 'Tạo sản phẩm thành công!');
        return redirect('backend/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodCategories = ProdCategory::all();
        $product = Product::find($id);
        return view('backend.products.edit')->with([
            'prodCategories' => $prodCategories,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        $product->name = $data['name'];
        $product->quatity = $data['quatity'];
        $product->content = $data['content'];
        $product->orgin_price = $data['orgin_price'];
        $product->sale_price = $data['sale_price'];
        $product->category_id = $data['prodcategory'];
        $product->brand_id = 1;
        $product->status = $data['status'];
        $product->view_count = 200;
        $product->sale_count = 3000;
        $product->review_count = 120;
        $product->user_id = auth()->user()->id;
        if ($request->hasFile('info')) {
            $disk = 'product';
            $path = $request->file('info')->store('prods', $disk);
            $product->disk = $disk;
            $product->path = $path;
        }
        $product->save();
        $request->session()->flash('success', 'Chỉnh phẩm thành công!');
        return redirect('backend/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Product::destroy($id);
        $request->session()->flash('success', 'Xóa sản phẩm thành công!');
        return redirect()->route('backend.products.index');
    }
}
