<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
     /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }
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
        $tags = Tag::get();
        return view('backend.posts.create')->with(['tags'=> $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->user()->cannot('create', Post::class)){
            abort(403);
        }
        $data = $request->only(['title', 'content', 'status']);
        $tags = $request->get('tags');
        $post = new Post();
        $post->title = $data['title'];
        $post->status = $data['status'];
        $post->content = $data['content'];
        $post->user_id = Auth::user()->id;
        $post->user_updated_id = Auth::user()->id;
        $post->category_id = 1;
        $post->save();
        // $user = User::find(17);
        // $user->posts()->save($post);
        $post->tags()->attach($tags);
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
        // $post = Post::find($id);
        // return view('backend.posts.show',[
        //     'post' => $post
        // ]);
        $post = Post::find($id);
        foreach ($post->tags as $tag) {
            echo $tag->name;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::get();
        return view('backend.posts.edit')->with([
            'post' => $post,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // $post = Post::find($id);
        // if(! Gate::allows('update-post',$post)){
        //     abort(403);
        // }
        // if($request->user()->cannot('update', $post)){
        //     abort(403);
        // }
        $this->authorize('update', $post);
        $data = $request->only(['title', 'content', 'status']);
        $tags = $request->get('tags');
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->status = $data['status'];
        $post->user_id = Auth::user()->id;
        $post->user_updated_id = Auth::user()->id;
        $post->save();
        $post->tags()->sync($tags);
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
        if(! Gate::allows('delete-post',$post)){
            abort(403);
        }
        $post->delete();
        return redirect()->route('backend.posts.index');
    }
}
