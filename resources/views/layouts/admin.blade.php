<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>{{config('app.name')}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('theme/css/adminlte.min.css')}}">
    <!-- slim select -->
    <link rel="stylesheet" href="{{ asset('plugins/slim-select/slimselect.min.css') }}">
    <script src="{{asset('plugins/fontaweson/fontaws.js')}}" crossorigin="anonymous"></script>
    <style>
        .btn {
            margin: 2.5px;
        }

    </style>
    @yield('styles')
</head>

<body>


    <!-- Site wrapper -->
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
      @include('partial.admin.navbar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        @include('partial.alert')
         

        @yield('content')
         
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>



    <script src="{{asset('theme/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/adminlte.min.js')}}"></script>
    <script src="{{asset('theme/js/demo.js')}}"></script>

    @yield('scripts')
</body>

</html>