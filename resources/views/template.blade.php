<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('img/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    {!! Html::style('css/bootstrap.min.css') !!}
    <!--  Material Dashboard CSS    -->
    {!! Html::stype('css/material-dashboard.css') !!}
    <!--     Fonts and icons     -->
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/font.css') !!}
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue">
            <div class="logo"> Dmaily </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{!! url('money') !!}">
                            <i class="material-icons">attach money</i>
                            <p>Money</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            @yield('content')
           <!-- <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"> Money Dashboard </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid"> aaaa </div>
            </div> -->
        </div>
    </div>
</body>
<!--   Core JS Files   -->
{!! Html::script('js/jquery-3.2.1.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/material.min.js') !!}
<!--  Charts Plugin -->
{!! Html::script('js/chartist.min.js') !!}
<!--  Dynamic Elements plugin -->
{!! Html::script('js/arrive.min.js') !!}
<!--  PerfectScrollbar Library -->
{!! Html::script('js/perfect-scrollbar.min.js') !!}
<!--  Notifications Plugin    -->
{!! Html::script('js/bootstrap-notify.min.js') !!}
<!--  Google Maps Plugin    -->
<!-- Material Dashboard javascript methods -->
{!! Html::script('js/material-dashboard.min.js') !!}
</html>
