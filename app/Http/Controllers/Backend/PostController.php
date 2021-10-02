<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::simplePaginate(6);
        $title = $request->get('title');
        if (!empty($title)) {
            $posts = Post::where('title', 'like', "%" . $title . "%")->get();
        }
        $status = $request->get('status');
        if ($status !== null) {
            $posts = Post::where('status', $status)->get();
        }
        return view('backend.posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'content', 'status']);
        $post = new Post();
        $post->title = $data['title'];
        $post->status = $data['status'];
        $post->user_created_id = 1;
        $post->user_updated_id = 1;
        $post->content = $data['content'];
        $post->category_id = 1;
        $post->save();
        return redirect('backend/posts');
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
        return view('backend.posts.show',[
            'post' => $post
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
        $post = Post::firstwhere('id', $id);
        return view('backend.posts.edit')->with(['post' => $post]);
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
        $data = $request->only(['title', 'content','status']);
        $post = Post::find($id);
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->status= $data['status'];
        $post->save();
        return redirect()->route('backend.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('backend.posts.index');
    }
}
