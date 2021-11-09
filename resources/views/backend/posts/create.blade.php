@extends('backend.layouts.master')
@section('title')
    Create Post
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tạo bài viết</h1>
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
                    <form action="{{ route('backend.posts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title') }}" placeholder="Nhập ...">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        @include('backend.components.summernote')
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh bài viết</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img_url" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Đăng ảnh</label>

                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Đăng tải</span>
                                            </div>
                                        </div>
                                        @error('img_url')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Select multiple-->
                                    <div class="form-group">
                                        <label>Thẻ</label>
                                        <select class="select2" name="tags[]" multiple="multiple"
                                            data-placeholder="Nhập thẻ" style="width: 100%;">
                                            @foreach ($tags as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                            <option value="1">Công khai</option>
                                            <option value="0">Bản nháp</option>
                                            <option value="2">Hoàn thiện</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Lưu</button>
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
