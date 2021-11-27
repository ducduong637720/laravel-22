@extends('backend.layouts.master')
@section('title')
    Create ProdCategory
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh mục sản phẩm</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-warning">
            <div class="card-header">
                <h3>Tạo danh mục sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('backend.prodcategories.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="Nhập tên danh mục ...">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <button type="submit" class="btn btn-default float-right">Hủy bỏ</button>
                </div>
            </form>
        </div>

    </div><!-- /.container-fluid -->
@endsection
