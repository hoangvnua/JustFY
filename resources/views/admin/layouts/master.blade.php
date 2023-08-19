<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JustFY | @yield('title')</title>

    @include('admin.includes.link')

    @yield('style')
    <style>
        .bg-color {
            background-color: #182537;
        }

        .text-color ul li a p {
            color: #fff;
        }

        .text-color ul li:hover {
            background-color: #243041;
        }

        .text-color ul li {
            padding: 8px 0;
            font-size: 16px;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper mb-5">
        <!-- Navbar -->
        @include('admin.layouts.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content pt-3">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        {{-- @include('admin.layouts.footer') --}}
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('admin.includes.script')
    @yield('script')

</body>

</html>
