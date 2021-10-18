@extends('backend.layouts.master')
@section('title')
    List Post
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Chỉnh sửa bài viết</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="card card-warning">
                    <form class="form-horizontal" method="POST" action="{{ route('backend.posts.update', $post->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="title" value="{{ $post->title }}" class="form-control"
                                            placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    @include('backend.components.summernote',
                                    ['content' => $post->content]
                                    )
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <select multiple="" class="form-control" name="tags[]">
                                            @foreach ($tags as $item)
                                                @foreach ($post->tags as $post_tag)
                                                    @php
                                                        $selected = '';
                                                        if ($post_tag->id == $item->id) {
                                                            $selected = 'selected';
                                                            break;
                                                        }
                                                    @endphp
                                                @endforeach
                                                <option value="{{ $item->id }}" {{ $selected }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option value="{{ $post->status }}">{!! $post->status_text !!}</option>
                                            <option value="0">Draft</option>
                                            <option value="1">Public</option>
                                            <option value="2">Done</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Sửa</button>
                                <button type="submit" class="btn btn-default float-right">Hủy bỏ</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>


    </div><!-- /.container-fluid -->
@endsection
