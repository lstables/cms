<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

@include('layouts.header')

@include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{--<section class="content-header">--}}
            {{--<h1>--}}
                {{--Page Header--}}
                {{--<small>Optional description</small>--}}
            {{--</h1>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
                {{--<li class="active">Here</li>--}}
            {{--</ol>--}}
        {{--</section>--}}
    @include('layouts.alerts')
        <section class="content-header">
            <h1>@yield('title')</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@include('layouts.footer')

</div><!-- ./wrapper -->

<!-- JS -->
<script src="{{ elixir('js/all.js') }}"></script>
<script>
    window.setTimeout(function() {
        $(".alert").delay(600, 0).slideUp(190, function(){
          $(this).remove();
        });
     }, 3000);
</script>
@yield('scripts')
</body>
</html>
