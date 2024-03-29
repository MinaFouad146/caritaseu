<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/SansPro/SansPro.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/mycustomstyle.css') }}">

    <style>
        .full-body-background {
            position: relative;
        }

        /*
        .full-body-background:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('{{ asset('assets/images/prints.png') }}');
            background-color: white;
            background-repeat: repeat;
            background-size: 35%;
            background-position: center;
            opacity: 0.2;
            /* Adjust the opacity as needed */
        /* z-index: -1; */


        /* .full-body-background {
            background-color: rgb(254, 253, 253);
            background-image: url('{{ asset('assets/images/prints.png') }}');
            background-repeat: repeat;
            background-position: center;
            /* background-size: cover; */
        /* background-size: 35%;
            height: 100vh;
            opacity: 0.1 */
        */ .sidebar-light {
            background-color: #eff6fd;
            /* Light gray */
            /* background-color: #e9ecef;
            /* Light blue-gray */
            /* background-color: #fff; */

            /* White */
            /* Add more background color options as needed */
        }
    </style>
    @yield('styles')
</head>



<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->

        @include('eu.parts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('eu.parts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: url(@yield('backgroundimg'))">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('contentHeader')</h1>
                        </div><!-- /.col -->
                        {{-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">@yield('contentHeaderLink')</a></li>
                                <li class="breadcrumb-item active">@yield('contentHeaderActive')</li>
                            </ol>
                        </div><!-- /.col --> --}}
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">

                @yield('content')
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>

            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

        @include('eu.parts.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

    @yield('scripts')
</body>

</html>
