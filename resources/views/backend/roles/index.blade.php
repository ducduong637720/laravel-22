@extends('backend.layouts.master')
@section('title')
    List role
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh sách role</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Danh sách role</li>
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
                        'href' => route('backend.roles.create'),
                        'type' => 'success',
                        'content' => 'Tạo mới chức vụ'
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
                        {{-- <div class="col-6">
                            <form method="GET" action="{{ route('backend.users.index') }}" class="form-inline">
                                <div class="col-4">
                                    <input type="text" value="{{ request()->get('name') }}" name="name"
                                        class="form-group" placeholder="Nhập tên cần tìm...">
                                </div>
                                <div class="col-4">
                                    <input type="text" value="{{ request()->get('email') }}" name="email"
                                        class="form-group" placeholder="Nhập email cần tìm...">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-info">Lọc</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->id }}
                                        </td>
                                        <td>
                                            {{ $role->name }} <br>
                                        </td>
                                        <td>
                                            {{ $role->slug }}
                                        </td>
                                        <td style="display: flex">
                                            <a href="{{ route('backend.roles.show', $role->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>
                                            <a href='{{ route('backend.roles.edit', $role->id) }}'>
                                                <i class="far fa-edit btn btn-outline-primary"></i>
                                            </a>
                                            <form method="POST" action="{{ route('backend.roles.destroy', $role->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
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
