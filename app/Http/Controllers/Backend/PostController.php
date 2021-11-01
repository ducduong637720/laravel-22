<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->authorizeResource(Post::class, 'post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::Paginate(6);
        $title = $request->get('title');
        if (!empty($title)) {
            $posts = Post::where('title', 'like', "%" . $title . "%")->Paginate(6);
        }
        // $status = $request->get('status');
        // if ($status !== null) {
        //     $posts = Post::where('status', $status)->Paginate(6);
        // }
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
        return view('backend.posts.create')->with(['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|unique:posts|max:255',
                'content' => 'required',
                'status' => 'required|in:0,1,2',
                'img_url' => 'required|file|mimes:jpg,png|max:24|min:20'
            ],
            [
                'required' => 'Trường :attribute phải nhập',
                'content.required' => 'Nội dung không được trống',

            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );

        if ($validator->fails()) {
            return redirect('backend/posts/create')
                ->withErrors($validator)
                ->withInput();
        }
        $data = $request->only(['title', 'content', 'status']);
        $tags = $request->get('tags');
        $post = new Post();
        $post->title = $data['title'];
        $post->status = $data['status'];
        $post->content = $data['content'];
        $post->user_id = Auth::user()->id;
        $post->user_updated_id = Auth::user()->id;
        $post->category_id = 2;
        if ($request->hasFile('img_url')) {
            $disk = 'public';
            $path = $request->file('img_url')->store('blogs', $disk);
            $post->disk = $disk;
            $post->img_url = $path;
        } 
        $post->save();
        $post->tags()->attach($tags);
        $request->session()->flash('success', 'Tạo bài viết thành công!');
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
        $user = User::get();
        return view('backend.posts.show', [
            'post' => $post,
            'user' => $user
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
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|unique:posts|max:255',
                'content' => 'required',
                'status' => 'required|in:0,1,2',
                'img_url' => 'required|file|mimes:jpg,png|max:24|min:20'
            ],
            [
                'required' => 'Trường :attribute phải nhập',
                'content.required' => 'Nội dung không được trống',

            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );

        if ($validator->fails()) {
            return redirect('backend/posts/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $data = $request->only(['title', 'content', 'status']);
        $tags = $request->get('tags');
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->status = $data['status'];
        $post->user_id = Auth::user()->id;
        $post->user_updated_id = Auth::user()->id;
        $post->save();
        $post->tags()->sync($tags);
        $request->session()->flash('success', 'Chỉnh sửa bài viết thành công!');
        return redirect()->route('backend.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // if (Auth::user()->cannot('delete-post')) {
        //     return abort(403);
        // }
        $post = Post::find($id);
        Post::destroy($id);
        $request->session()->flash('success', 'Xóa bài viết thành công!');
        return redirect()->route('backend.posts.index');
    }
}
