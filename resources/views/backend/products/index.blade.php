@extends('backend.layouts.master')
@section('title')
    List products
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh sách sản phầm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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
                        'href' => route('backend.products.create'),
                        'type' => 'success',
                        'content' => 'Tạo mới sản phẩm'
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
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                    <th>Danh mục</th>
                                    <th>Nhãn hiệu</th>
                                    <th>Trạng thái</th>
                                    <th>Lượt xem</th>
                                    <th>Số lượng bán</th>
                                    <th>Số lượng đánh giá</th>
                                    <th>Người tạo</th>
                                    <th>Ngày tạo</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }} </td>
                                        <td>
                                            @if (!empty($product->info))
                                                <img src="{{ $product->info_url_full ??''}}" width="100px" ; height="60px">
                                            @endif
                                        </td>
                                        <td>{{ $product->orgin_price_format }}</td>
                                        <td>{{ $product->sale_price_format }}</td>
                                        <td>{{ $product->prodCategories->name ??''}}</td>
                                        <td>{{ $product->brand_id }}</td>
                                        <td>{!! $product->status_text !!}</td>
                                        <td>{{ $product->view_count }}</td>
                                        <td>{{ $product->sale_count }}</td>
                                        <td>{{ $product->review_count }}</td>
                                        <td>{{ $product->user->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td style="display: flex">
                                            <a href="{{ route('backend.products.edit', $product->id) }}"
                                                class="btn btn-outline-info"><i class="far fa-edit"></i></a>
                                            <form method="POST"
                                                action="{{ route('backend.products.destroy', $product->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            <a href="{{ route('backend.products.show', $product->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-info-circle"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
@endsection
