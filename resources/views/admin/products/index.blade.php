@extends('admin.layouts.master')

@section('content')
    <div class="col-2 float-right" style="right: 10px; padding-bottom: 10px">
        <button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>
    </div>
    <div class="row" style="width: 100%;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danhh sách sản phẩm</h3>

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
                            <tr>
                                <td>183</td>
                                <td><a href="#">hihi</a></td>
                                <td>11-7-2014</td>
                                <td>111</td>
                                <td><span class="tag tag-success">Approved</span></td>
                                <td>111</td>
                                <td>action</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
