@extends('backend.layouts.master')
@section('title')
    Create Post
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tạo sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
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
                    <form action="{{ route('backend.products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" placeholder="Nhập ...">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" name="quatity"
                                            class="form-control @error('quatity') is-invalid @enderror"
                                            value="{{ old('quatity') }}" placeholder="Nhập số lượng ...">
                                        @error('quatity')
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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="info">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                            </div>
                                        </div>
                                        @error('info')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Thương hiệu</label>
                                        <select class="form-control" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select class="form-control" name="prodcategory">
                                            @foreach ($prodCategories as $prodcategory)
                                                <option value="{{ $prodcategory->id }}">{{ $prodcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
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
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-4">
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
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input type="text" name="orgin_price" class="form-control" placeholder="Nhập ...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input type="text" name="sale_price" class="form-control" placeholder="Nhập ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row"></div>
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
