<!DOCTYPE html>
<html>
<head>
    <title>网站后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>

    <link rel="icon" type="image/ico" href="{{asset('images/favicon.ico')}}"/>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/vendor/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" media="all"
          href="{{asset('assets/js/vendor/mmenu/css/jquery.mmenu.all.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap-checkbox.css')}}">
    <link href="{{asset('assets/css/minimal.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        table td, table th {
            text-align: center;
            vertical-align: middle !important;
            color: #fafafa;
        }

        .pageheader {
            padding: 15px;
        }

        .alert {
            font-size: 14px;
            padding: 10px;
        }

        .alert-dismissable .close, .alert-dismissible .close {
            right: 0;
        }

        .img-list {
            min-height: 270px;
        }

        .tile-body {
            padding: 30px 0;
        }
    </style>
</head>

<body class="bg-1">
<!-- Preloader -->
<div class="mask">
    <div id="loader"></div>
</div>
<!--/Preloader -->

<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation"
             id="navbar">
            <!-- Branding -->
            <div class="navbar-header col-md-2">
                <a class="navbar-brand" href="javascript:;">
                    <strong>CJ&CMT</strong>
                </a>
                <div class="sidebar-collapse">
                    <a href="#">
                        <i class="fa fa-bars" style="margin-top: 15px;"></i>
                    </a>
                </div>
            </div>
            <!-- Branding end -->
            <!-- .nav-collapse -->
            <div class="navbar-collapse">
                <!-- Page refresh -->
                <ul class="nav navbar-nav refresh">
                    <li class="divided">
                        <a href="#" class="page-refresh"><i class="fa fa-refresh" style="margin-top: 15px;"></i></a>
                    </li>
                </ul>
                <!-- /Page refresh -->
                <!-- Quick Actions -->
                <ul class="nav navbar-nav quick-actions">

                    <li class="dropdown divided user" id="current-user">
                        <div class="profile-photo">
                        </div>
                        <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                            {{session('username')}}
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu arrow settings">
                            <li>
                                <h3>Backgrounds:</h3>
                                <ul id="color-schemes">
                                    <li><a href="#" class="bg-1"></a></li>
                                    <li><a href="#" class="bg-2"></a></li>
                                    <li><a href="#" class="bg-3"></a></li>
                                    <li><a href="#" class="bg-4"></a></li>
                                    <li><a href="#" class="bg-5"></a></li>
                                    <li><a href="#" class="bg-6"></a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="{{url('admin/logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /Quick Actions -->
                <!-- Sidebar -->
                <ul class="nav navbar-nav side-nav" id="sidebar">
                    <li class="navigation" id="navigation">
                        <a href="#" class="sidebar-toggle" data-toggle="#navigation">导航 <i
                                class="fa fa-angle-up"></i></a>
                        <ul class="menu">
                            <li>
                                <a href="{{url('admin')}}">
                                    <i class="fa fa-tachometer"></i> 主面板
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/user')}}">
                                    <i class="fa fa-user"></i> 管理员
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/config')}}">
                                    <i class="fa fa-gear"></i> 网站配置
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/desc')}}">
                                    <i class="fa fa-adjust"></i> 网站简介
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-picture-o"></i> 相册管理 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('admin/photo')}}">
                                            <i class="fa fa-caret-right"></i> 相册列表
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/photoadd')}}">
                                            <i class="fa fa-caret-right"></i> 添加图片
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-book"></i> 日记管理 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('admin/note')}}">
                                            <i class="fa fa-caret-right"></i> 日记列表
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/noteadd')}}">
                                            <i class="fa fa-caret-right"></i> 添加日记
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{url('admin/us')}}">
                                    <i class="fa fa-user"></i> 关于我们
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar end -->
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- Fixed navbar end -->
        <!-- Page content -->
        <div id="content" class="col-md-12">
            @yield('mail')
        </div>
        <!-- Page content end -->
    </div>
    <!-- Make page fluid-->
</div>
<!-- Wrap all page content end -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendor/mmenu/js/jquery.mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendor/sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vendor/animate-numbers/jquery.animateNumbers.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/minimal.min.js')}}"></script>
<script>
    $(function () {
        // Initialize card flip
        $('.card.hover').hover(function () {
            $(this).addClass('flip');
        }, function () {
            $(this).removeClass('flip');
        });
        window.setTimeout(function () {
            $('[data-dismiss="alert"]').alert('close');
        }, 5000);
    });
</script>
</body>

</html>
