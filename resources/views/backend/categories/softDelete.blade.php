@extends('backend.layouts.master')
@section('title')
  List categories
@endsection

@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Danh sách danh mục đã xóa</h1>
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
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Ngày sửa</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $categories as $category )
              <tr>
                <td>{{ $category->id }}</td>
                <td> {{ $category->name }} <br>
                  Slug: {{ $category->slug }}</td>
                <td>{!! $category->status_text !!}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td style="display: flex">
                  <a href="{{ route('backend.categories.restore', $category->id) }}"
                    class="btn btn-outline-info">Khôi phục</a>  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="card-footer">
            <a href="{{ route('backend.categories.index') }}">
              <button type="submit" class="btn btn-default float-right">Quay lại</button>
            </a>
          </div>
          {{ $categories->links() }}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  
</div><!-- /.container-fluid -->
@endsection