@extends('backend.layouts.master')
@section('title')
    List storages
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh sách ảnh</h1>
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
                        @include('backend.components.btn', [
                        'href' => route('backend.categories.create'),
                        'type' => 'success',
                        'content' => 'Thêm ảnh'
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
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paths as $key=>$path)
                                    <tr>
                                        <td>
                                            <img src="{{ $path }}" alt="" width="100px" height="100px">
                                        </td>
                                        <td>{{ $path }}</td>
                                        <td style="display: flex">
                                            <form method="GET" action="{{ route('backend.storages.download', $key) }}">
                                                <input type="text" value="{{ $path }}" name="name"
                                                    class="form-control" hidden>
                                                <button class="btn btn-info"><i class="fas fa-download"></i></button>
                                            </form>
                                            <form method="POST" action="{{ route('backend.storages.destroy', ['id'=> $key]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                        {{-- <td style="display: flex">
                                            <a href="{{ route('backend.categories.edit', $category->id) }}"
                                                class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                           
                                            <a href="{{ route('backend.categories.show', $category->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach
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
