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
        // $posts_query = DB::table('posts');
        // $posts = Post::where('status',1)->get();
        // $posts = Post::get();
        $posts = Post::simplePaginate(3);
        // $posts = Post::paginate(3);;
        $title = $request->get('title');
        if (!empty($title)) {
            $posts = Post::where('title', 'like', "%" . $title . "%")->simplePaginate(3);
        }
        $status = $request->get('status');
        if ($status !== null) {
            $posts = Post::where('status', $status)->simplePaginate(3);
        }
        // $posts = DB::table('posts')
        // // ->where('status',1)
        // // ->orwhere('view_count','>',60)
        // // ->where([
        // //     'status'=>1,['view_count','>',70]
        // //     ])
        // // ->orderBy('created_at','desc')
        // ->get();
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
        // DB::table('posts')->insert([
        //     'title' => $data['title'],
        //     'slug' => Str::slug($data['title']),
        //     'content' => $data['content'],
        //     'user_created_id' => 1,
        //     'user_updated_id' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'category_id' => 1
        // ]);
        
        $post = new Post();
        $post->title = $data['title'];
        $post->status = $data['status'];
        // $post->slug = $data['title'];
        $post->user_created_id = 1;
        $post->user_updated_id = 1;
        $post->content = $data['content'];
        $post->category_id = 1;
        $post->save();


        return redirect()->route('backend.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_query = DB::table('posts')->select(['id', 'title', 'slug', 'user_created_id', 'user_updated_id']);
        $post = $post_query->addSelect(['content', 'status', 'view_count', 'created_at', 'updated_at'])->find($id);
        return view(
            'backend.posts.show',
            ['post' => $post]
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
        // $post = DB::table('posts')->find($id);
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
        // dd($data);
        // DB::table('posts')->where('id', $id)
        //     ->update([
        //         'title' => $data['title'],
        //         'content' => $data['content']
        //     ]);

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
        // DB::table('posts')->where('id', $id)->delete();
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('backend.posts.index');
    }
}
