<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{$setting->description}}">
    <meta name="keywords" content="{{$setting->keyword}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ===== Site Title===== -->
    <title>@yield('title')</title>

    <!-- ===== Google Fonts ===== -->

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic|Raleway:500,600,700">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- ===== Favicon Icon ===== -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <!-- ===== Bootstrap ===== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- ===== Font Icons ===== -->
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">

    <!-- ===== Corousel and Lightbox ===== -->
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/themes/default/default.css')}}">

    <!-- ===== Colors ===== -->
    <link rel="stylesheet" href="{{asset('css/colors/pink.css')}}">


    <!-- ===== Preloader ===== -->
    <link rel="stylesheet" href="{{asset('css/preloader.css')}}">

    <!-- ===== style.css ===== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- ===== Responsive CSS ===== -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!--[===== if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
    <![endif]===== -->

</head>

<body>
<!-- ===== preloader ===== -->
<div class="preloaders">
    <div class="preloaders-gif">&nbsp;</div>
</div>


<!-- ===== Header ===== -->
<header id="home">

    <!-- ===== Over color Image ===== -->
    <div class="background-overlay">

        <div class="container-header">

            <!-- ===== Sticky Navigation ===== -->
            <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation bgc-two">
                <div class="container">
                    <div class="navbar-header">

                        <!-- ===== Logo on Sticky Navigation Bar ===== -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#onepage-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><i class="fa fa-heart"></i>LOVE</a>
                    </div>

                    @yield('nav')


                </div>

            </div>


            <!-- ===== End Sticky Navigation ===== -->

        </div>

        <!-- ===== Welcome ===== -->
        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1 distance-header">

                    <h1>
                        <strong>LOVE</strong><span style="font-style: italic"> - {{$data->banner}}</span>
                    </h1>

                    <i class="fa fa-heart"></i>
                    <div class="underline"></div>
                    <div id="getting-started"></div>


                </div>

            </div>

        </div>
        <!-- ===== End Welcome ===== -->

    </div>

</header>

@yield("mail")

<!-- ===== Footer ===== -->
<footer class="bgc-two">
    <div class="container">
        <div class="copyright sub-sub">
            <ul>
                <li><i class="fa fa-qq"></i></li>
                <li><i class="fa fa-wechat"></i></li>
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-instagram"></i></li>
            </ul>
            <p>Copyright © 2020 UIdeck All Right Reserved. More Templates <a href="http://www.cssmoban.com/"
                                                                             target="_blank" title="模板之家">模板之家</a> -
                Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
        </div>
    </div>
</footer>


<!-- ===== Script Javascript ===== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/preloader.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/retina.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.localScroll.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nav.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/spotlight.bundle.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script type="text/javascript">
    $("#getting-started")
        .countdown('{{$data->important_time}}', function (event) {
            $(this).text(
                event.strftime('%D Days %H Hours %M Min %S Sec')
            );
        });
</script>

</body>
</html>
