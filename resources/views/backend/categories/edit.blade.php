@extends('backend.layouts.master')
@section('title')
  Edit Category
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Chỉnh sửa danh mục</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Danh sách danh mục</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('backend.posts.update',1)}}">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Tên danh mục</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
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
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Date">
            </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->
  
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
          </form>
      </div>
    
  </div><!-- /.container-fluid -->
@endsection
