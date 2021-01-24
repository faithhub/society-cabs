<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Title -->
    <title>@yield('title'){{ Setting::get('site_title', 'Easycode') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ Setting::get('site_icon') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admin/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .img-cover {
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        };
    </style>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body >



    <body class="hold-transition" >
    <div class="row"> 
        <div class="col-md-8 col-sm-8 col-lg-8 img-cover" style="background-image: url(/main/assets/img/back12-min.png);">
            
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 login-page" style="background: #ffffff;">
            @yield('content')
        </div>
    </div>
  

    
    <script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('admin/dist/js/adminlte.min.js')}}"></script>


    
 
</body>
</html>