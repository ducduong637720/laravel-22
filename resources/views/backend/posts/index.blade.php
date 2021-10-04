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
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @include('backend.components.btn', [
                        'href' => route('backend.posts.create'),
                        'type' => 'success',
                        'content' => 'Tạo mới bài viết'
                        ])

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <form method="GET" action="{{ route('backend.posts.index') }}" class="form-inline">
                            <div class="col-4">
                                <input type="text" value="{{ request()->get('title') }}" name="title" class="form-group"
                                    placeholder="">
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select type="text" value="{{ request()->get('status') }}" class="form-control"
                                        name="status">
                                        <option value="STATUS_PUBLIC">Public</option>
                                        <option value="STATUS_DRAFT">Draft</option>
                                        <option value="STATUS_Done">Done</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-3">
              <input type="text" class="form-group" placeholder=".col-5">
            </div> --}}
                            <div class="col-4">
                                <button class="btn btn-info">Lọc</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên bài viết</th>
                                    <th>Lượt xem</th>
                                    <th>Danh mục</th>
                                    <th>Tag</th>
                                    <th>Người tạo</th>
                                    <th>Người sửa</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày sửa</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>
                                            Title: {{ $post->title }} <br>
                                            Slug: {{ $post->slug }}
                                        </td>
                                        <td>{{ $post->view_count }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            @foreach ($post->tags as $tag )
                                                <span class="badge badge-info">{{$tag->name}}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $post->user->name}}</td>
                                        <td>{{ $post->userUpdate->name }}</td>
                                        <td>{!! $post->status_text !!}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td style="display: flex;">
                                            <a href="{{ route('backend.posts.edit', $post->id) }}"
                                                class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                            <form method="POST" action="{{ route('backend.posts.destroy', $post->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
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
