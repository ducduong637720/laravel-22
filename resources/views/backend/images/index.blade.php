@extends('backend.layouts.master')
@section('title')
    List image
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh sách ảnh sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Danh sách ảnh sản phẩm</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="container-fluid">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @include('backend.components.btn', [
                        'href' => route('backend.images.create'),
                        'type' => 'success',
                        'content' => 'Tạo mới ảnh'
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
                                    <th>Mã ảnh</th>
                                    <th>Tên sản phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            <p>
                                                <a class="btn btn-primary" type="button" data-toggle="collapse"
                                                    data-target="#collapseExample-{{$product->id}}" aria-expanded="false"
                                                    aria-controls="collapseExample">{{$product->name}}
                                                </a>
                                                
                                            </p>
                                            <div class="collapse" id="collapseExample-{{$product->id}}">
                                                <div class="card card-body">
                                                    @foreach ($product->product_image as $img)
                                                         <img src="{{ $img->image_url_full }}" width="100px" ; height="60px" alt="">
                                                         <form method="POST"
                                                         action="{{ route('backend.images.destroy', $img->id) }}">
                                                         @csrf
                                                         @method('DELETE')
                                                         <button class="btn btn-outline-danger">
                                                             <i class="far fa-trash-alt"></i>
                                                         </button>
                                                     </form>
                                                    @endforeach
                                                </div>
                                                <a href="{{ route('backend.images.edit', $product->id) }}"
                                                    class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                            </div>
                                          
                                        </td>
                                        {{-- <td style="display: flex">
                                            <a href="{{ route('backend.images.edit', $image->id) }}"
                                                class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                            <form method="POST"
                                                action="{{ route('backend.images.destroy', $image->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            <a href="{{ route('backend.images.show', $image->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $images->links() }} --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
@endsection
