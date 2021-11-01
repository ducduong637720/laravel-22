@extends('backend.layouts.master')
@section('title')
    List Post
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh sách bài viết</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Danh sách bài viết</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="container-fluid">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @can('create-post', App\Models\Post::class)
                            @include('backend.components.btn', [
                            'href' => route('backend.posts.create'),
                            'type' => 'success',
                            'content' => 'Tạo bài viết'
                            ])
                        @endcan

                        <div class="card-tools">
                            <form method="GET" action="{{ route('backend.posts.index') }}">
                                <div class="input-group input-group-sm">
                                <input type="text" name="title" value="{{ request()->get('title') }}" class="form-control float-right"
                                    placeholder="Tìm kiếm">
                                    {{-- <select type="text" value="{{ request()->get('status') }}" class="form-control"
                                        name="status">
                                        <option value="1">Public</option>
                                        <option value="0">Draft</option>
                                        <option value="2">Done</option>
                                    </select> --}}
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên bài viết</th>
                                    <th>Ảnh bài viết</th>
                                    <th>Lượt xem</th>
                                    <th>Danh mục</th>
                                    <th>Thẻ</th>
                                    <th>Người tạo</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            @if (!empty($post->img_url))
                                                <img src="{{ $post->image_url_full }}" width="100px" ; height="60px">
                                            @endif
                                        </td>
                                        <td>{{ $post->view_count }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <span class="badge badge-info">{{ $tag->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $post->user->name }}
                                        </td>
                                        {{-- <td>{{ $post->userUpdate->name }}</td> --}}
                                        <td>{!! $post->status_text !!}</td>
                                        <td>{{ $post->created_at }}</td>
                                        {{-- <td>{{ $post->updated_at }}</td> --}}
                                        <td style="display: flex; margin-right: 10px">
                                            @can('update-post', $post)
                                                <a href="{{ route('backend.posts.edit', $post->id) }}"
                                                    class="btn btn-outline-info"><i class="far fa-edit"></i>
                                                </a>
                                            @endcan
                                            @can('delete-post', $post)
                                                <form method="POST" action="{{ route('backend.posts.destroy', $post->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                            <a href="{{ route('backend.posts.show', $post->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
@endsection
