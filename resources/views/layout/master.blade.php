<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Superieur Admin - Dashboard</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="/css/bootstrap-extend.css">

    <!-- theme style -->
    <link rel="stylesheet" href="/css/master_style.css">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="/css/skins/_all-skins.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Morris charts -->
    <link rel="stylesheet" href="/assets/vendor_components/morris.js/morris.css">

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor_components/datatable/datatables.min.css"/>


</head>



<body class="hold-transition skin-info-light sidebar-mini rtl">
<div class="wrapper">





        <section class="content">
            @include('layout.notification')
            @yield('content')
        </section>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>

    <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- date-range-picker -->
<script src="/assets/vendor_components/moment/min/moment.min.js"></script>
<script src="/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap 4.0-->
<script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="/assets/vendor_components/chart.js-master/Chart.min.js"></script>

<!-- Slimscroll -->
<script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Morris.js charts -->
<script src="/assets/vendor_components/raphael/raphael.min.js"></script>
<script src="/assets/vendor_components/morris.js/morris.min.js"></script>

<!-- This is data table -->
<script src="/assets/vendor_components/datatable/datatables.min.js"></script>

<!-- Superieur Admin App -->
<script src="/js/template.js"></script>

<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
<script src="/js/pages/dashboard.js"></script>

<!-- Superieur Admin for demo purposes -->
<script src="/js/demo.js"></script>

@yield('scripts')
</body>
</html>