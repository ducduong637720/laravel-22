@extends('backend.layouts.master')
@section('title')
  Create Category
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Danh sách danh mục</li>
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
          <h3>Tạo mới danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('backend.categories.store')}}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                  <label>Tên danh mục</label>
                  <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục ...">
              </div>  
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="status">
                  <option value="1">Public</option>
                  <option value="0">Draft</option>
                  <option value="2">Done</option>
                </select>
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