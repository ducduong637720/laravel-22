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
                                        <input type="text" name="title" value="{{ $post->title }}" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Enter ...">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <label>Nội dung</label>
                                    @include('backend.components.summernote',
                                    ['content' => $post->content]
                                    )
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh bài viết</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img_url"  value="{{ $post->image_url_full }}" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Đăng ảnh</label>

                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @error('img_url')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Thẻ</label>
                                        <select multiple="multiple" class="select2" name="tags[]" style="width: 100%;">
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
                                        <select class="form-control" name="category">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
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
