<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản trị Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset("theme_admin/vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset("theme_admin/vendor/datatables/dataTables.bootstrap4.css") }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset("theme_admin/css/sb-admin.css") }}" rel="stylesheet">
    <link href="{{ asset("theme_admin/css/main_admin.css") }}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item {{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tổng quan</span>
            </a>
        </li>
        <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.get.list.category') }}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Danh mục sản phẩm</span></a>
        </li>

        <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.CategoryNews' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.get.list.CategoryNews') }}">
                <i class="fas fa-fw fa-clone"></i>
                <span>Danh mục tin tức</span></a>
        </li>

        <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.get.list.product') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Sản phẩm</span></a>
        </li>
        <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.news' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.get.list.news') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Tin tức</span></a>
        </li>

        <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.get.list.transaction') }}">
                <i class="fa fa-shopping-cart"></i>
                <span>Đơn hàng</span></a>
        </li>

        <li class="nav-item {{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.get.list.user') }}">
                <i class="fa fa-user"></i>
                <span>Khách hàng</span></a>
        </li>

        <li class="nav-item" {{ \Request::route()->getName() == 'admin.get.list.contact' ? 'active' : '' }}>
            <a class="nav-link" href="{{ route('admin.get.list.contact') }}">
                <i class="fa fa-envelope"></i>
                <span>Liên hệ</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            {{--<ol class="breadcrumb">--}}
                {{--<li class="breadcrumb-item">--}}
                    {{--<a href="#">Dashboard</a>--}}
                {{--</li>--}}
                {{--<li class="breadcrumb-item active">Overview</li>--}}
            {{--</ol>--}}

            <!-- Content-->

            @yield('content')

            <!-- End. Content-->



        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset("theme_admin/vendor/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("theme_admin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset("theme_admin/vendor/jquery-easing/jquery.easing.min.js") }}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset("theme_admin/vendor/chart.js/Chart.min.js") }}"></script>
<script src="{{ asset("theme_admin/vendor/datatables/jquery.dataTables.js") }}"></script>
<script src="{{ asset("theme_admin/vendor/datatables/dataTables.bootstrap4.js") }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset("theme_admin/js/sb-admin.min.js") }}"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset("theme_admin/js/demo/datatables-demo.js") }}"></script>
<script src="{{ asset("theme_admin/js/demo/chart-area-demo.js") }}"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#output_img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#input_img").change(function() {
        readURL(this);
    });

    function readNewsURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#output_img_news').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#input_img_news").change(function() {
        readNewsURL(this);
    });
</script>
@yield('script')

</body>

</html>
