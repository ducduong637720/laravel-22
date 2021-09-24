@extends('backend.layouts.master')
@section('title')
  List user
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
            'href' => route('backend.posts.add'),
            'type' => 'success',
            'content' => 'Tạo mới bài viết'
          ])

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
                <th>Bài viết</th>
                <th>Danh mục</th>
                <th>Người khởi tạo</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>Thời sự</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>
                  <a href="{{ route('backend.posts.edit', ['posts_id'=>'1']) }}" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                  <a href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>  
                </td>                
              </tr>
              <tr>
                <td>1</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>Thời sự</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>
                  <a href="" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                  <a href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>  
                </td>                
              </tr>
              <tr>
                <td>1</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>Thời sự</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>
                  <a href="" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                  <a href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>  
                </td>                
              </tr>
              <tr>
                <td>1</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>Thời sự</td>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>
                  <a href="" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                  <a href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>  
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  
</div><!-- /.container-fluid -->
@endsection