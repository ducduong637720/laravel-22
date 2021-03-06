<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::Paginate(9);
        $tags = Tag::get();
        $categories = Category::all();
        return view('frontend.posts.index')->with([
            'posts' => $posts,
            'tags' =>$tags,
            'categories' =>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $categories = Category::get();
        $tags = Tag::get();
        return view('frontend.posts.show')->with([
            'post' => $post,
            'categories' => $categories,
            'tags' =>$tags
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function list(){
        $posts = Post::get();
        $categories = Category::get();
        $tags = Tag::get();
        return view('frontend.posts.list')->with([
            'posts' => $posts,
            'categories' => $categories,
            'tags' =>$tags
        ]);
    }

    public function category_posts($id){
        $categories = Category::get();
        $tags = Tag::get();
        $posts = Post::where('category_id', $id)->get();

        return view('frontend.posts.list')->with([
            'posts' => $posts,
            'categories' => $categories,
            'tags' =>$tags
        ]);
    }

   
}
