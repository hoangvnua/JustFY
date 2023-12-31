@extends('admin.layouts.master')

@section('title')
    Danh sách sản phẩm
@endsection

@section('content')
    <div class="col-2 float-right" style="right: 10px; padding-bottom: 10px">
        <a href="/products/create" type="button" class="btn btn-block btn-primary btn-flat"><i class="fas fa-plus fa-xs"></i>
            Thêm mới</a>
    </div>
    <div class="row" style="width: 100%;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách sản phẩm</h3>

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
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Nhóm</th>
                                <th>Giá nhập</th>
                                <th>Giá bán lẻ</th>
                                <th>Giá bán buôn</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->ma }}</td>
                                    <td><a href="#">{{ $product->TenSP }}</a></td>
                                    <td>{{ $product->NhomSP }}</td>
                                    <td>{{ $product->GiaNhap }}</td>
                                    <td><span class="tag tag-success">{{ $product->GiaLe }}</span></td>
                                    <td>{{ $product->GiaSi }}</td>
                                    <td>action</td>
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
@endsection
