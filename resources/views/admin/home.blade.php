@extends('admin.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('style')
    <style>
        .hover li:hover {
            background: #F2F9FF;
        }

        .info-box-custom {
            display: -ms-flexbox;
            display: flex;
            margin: 1rem 0;
            padding: 0 0 0 10px;
            position: relative;
            width: 100%;
        }

        .info-box-icon-custom {
            border-radius: 50%;
            -ms-flex-align: center;
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            font-size: 1.875rem;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            width: 63px;
        }

        .info-box-content-custom {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
            line-height: 1.8;
            -ms-flex: 1;
            flex: 1;
            padding: 0 10px;
            overflow: hidden;
        }

        .info-box-number-custom {
            display: block;
            margin-top: 0.25rem;
            font-weight: 700;
        }

        .title-custom {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #E8EAEB;
            height: 64px;
            padding: 0 16px;
            align-items: center;
        }
    </style>
@endsection

@section('header')
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto hover">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="/admin/theme/dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                Nguyễn Văn Hoàng
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="far fa-user"></i>
                    Tài khoản của tôi
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Đăng xuất
                </a>

            </div>
        </li>
    </ul>
@endsection
@section('content')
    <!-- Main content -->

    <div class="card">
        <div class="title-custom">
            <h5>KẾT QUẢ KINH DOANH TRONG NGÀY</h5>
            <select class="custom-select rounded-0" id="exampleSelectRounded0" style="width: 225px;">
                <option>Tất cả các chi nhánh</option>
                <option>Value 2</option>
            </select>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box-custom">
                    <span class="info-box-icon-custom bg-info"><i class="fas fa-dollar-sign"></i></span>

                    <div class="info-box-content-custom">
                        <span class="info-box-text-custom">Doanh thu</span>
                        <span class="info-box-number-custom">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box-custom">
                    <span class="info-box-icon-custom bg-success"><i class="fas fa-box"></i></span>

                    <div class="info-box-content-custom">
                        <span class="info-box-text-custom">Đơn hàng mới</span>
                        <span class="info-box-number-custom">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box-custom">
                    <span class="info-box-icon-custom bg-warning"><i class="fas fa-undo-alt" style="color: #fff"></i></span>

                    <div class="info-box-content-custom">
                        <span class="info-box-text-custom">Đơn hàng trả</span>
                        <span class="info-box-number-custom">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box-custom">
                    <span class="info-box-icon-custom bg-danger"><i class="far fa-times-circle"></i></span>

                    <div class="info-box-content-custom">
                        <span class="info-box-text-custom">Đơn hàng hủy</span>
                        <span class="info-box-number-custom">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <h class="title-custom">DOANH THU BÁN HÀNG</h>
            <canvas id="myChart" style="height: 350px;"></canvas>
        </div>
        <!-- /.col-md-6 -->
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Products</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Sales</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="/admin/theme/dist/img/default-150x150.png" alt="Product 1"
                                    class="img-circle img-size-32 mr-2">
                                Some Product
                            </td>
                            <td>$13 USD</td>
                            <td>
                                <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    12%
                                </small>
                                12,000 Sold
                            </td>
                            <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/admin/theme/dist/img/default-150x150.png" alt="Product 1"
                                    class="img-circle img-size-32 mr-2">
                                Another Product
                            </td>
                            <td>$29 USD</td>
                            <td>
                                <small class="text-warning mr-1">
                                    <i class="fas fa-arrow-down"></i>
                                    0.5%
                                </small>
                                123,234 Sold
                            </td>
                            <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/admin/theme/dist/img/default-150x150.png" alt="Product 1"
                                    class="img-circle img-size-32 mr-2">
                                Amazing Product
                            </td>
                            <td>$1,230 USD</td>
                            <td>
                                <small class="text-danger mr-1">
                                    <i class="fas fa-arrow-down"></i>
                                    3%
                                </small>
                                198 Sold
                            </td>
                            <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="/admin/theme/dist/img/default-150x150.png" alt="Product 1"
                                    class="img-circle img-size-32 mr-2">
                                Perfect Item
                                <span class="badge bg-danger">NEW</span>
                            </td>
                            <td>$199 USD</td>
                            <td>
                                <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    63%
                                </small>
                                87 Sold
                            </td>
                            <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

    <!-- /.content -->
@endsection

@section('script')
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'test'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 8, 3, 5],
                    borderWidth: 1,
                    backgroundColor: 'rgb(74, 169, 207)',

                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
