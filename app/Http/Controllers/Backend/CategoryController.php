<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::simplePaginate(6);
        return view('backend.categories.index')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'status']);
        $category = new Category();
        $category->name = $data['name'];
        $category->status = $data['status'];
        $category->save();
        return redirect('backend/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $category = Category::find($id);
        $posts = Category::find($id)->posts;
        dd($posts);
        return view(
            'backend.categories.show',
            ['category' => $category]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::firstwhere('id', $id);
        return view('backend.categories.edit')->with(['category' => $category]);
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
        $data = $request->only('name', 'status');
        $category = Category::find($id);
        $category->name = $data['name'];
        $category->status = $data['status'];
        $category->save();
        return redirect()->route('backend.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('backend.categories.index');
    }

    public function delete(Request $request)
    {
        $categories = Category::onlyTrashed()->simplePaginate(6);
        return view('backend.categories.softDelete', [
            'categories' => $categories
        ]);
    }

    public function restore($id)
    {
        $categories = Category::withTrashed()->where('id', $id)->restore();
        return redirect()->route('backend.categories.delete');
    }
}
