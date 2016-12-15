<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from steelcoders.com/alpha/v1.2/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 24 Oct 2016 05:04:20 GMT -->
<head>
        <!-- Title -->
        <title>{{ config('app.name','ShangriLa') }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ShangriLa') }}</title>

        <!-- Styles
        <link href="/css/app.css" rel="stylesheet">-->

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="/assets/plugins/materialize/css/materialize.min.css"/>
        <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link href="/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="/assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <!-- Custom Styles -->
        <style type="text/css">
          body {
            background-color: white !important;
          }

          .text-white {
            color:white !important;
          }
        </style>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <div class="loader-bg"></div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-spinner-teal lighten-1">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <header class="mn-header navbar-fixed" style="position:absolute; width:100%">
        <nav class="" style="position:absolute !important;background:transparent; box-shadow:none;">
            <div class="nav-wrapper row">
                <!--<div class="header-title col s3">
                    <h4 class="chapter-title">{{ config('app.name', 'ShangriLa') }}</h4>
                </div>-->
                <div class="header-title right">
                  <a href="{{ url('/login') }}" class="waves-effect waves-grey"> Sign In </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="mn-content">
            <div class="row"style="height: 100%;">
              <div class="parallax-container" style="height: 100%;">
                <div class="row" >
                  <div class="col s12"></div>
                  <div class="col m6 offset-m3" style="margin-top: 12%;">
                    <div class="center"><image src="/assets/images/logo-big.png" alt="{{ config('app.name', 'Shangri-a') }}" style="width: 100%;" /></div>
                  </div>
                </div>
                <div class="parallax"><img src="/assets/images/mountains1.png"></div>
              </div>
            </div>
            <div class="">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content cyan darken-1" style="padding: 70px 100px;">
                            <h5><p align="justify" class="text-white">Forum Indonesia Muda (FIM), di sini kita bisa temukan semangat, semangat berbagi, berinovasi dan berkolaborasi bersama dengan pemuda indonesia, untuk negeri kita. Ya negeri yang kita cintai dan yakini akan harum semerbak dengan prestasi, budaya dan aksi nyata dari kita. Kita pemuda Indonesia yang akan selalu berusaha mengharumkan indonesia. dan selalu bangga menjadi bangsa Indonesia yang menjadi bagian dari sebuah kebaikan.</p></h5><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="parallax-container">
                  <div class="parallax"><img src="assets/images/mountains3.png"></div>
              </div>
            </div>
    </div>
    <div class="left-sidebar-hover"></div>

    <!-- Javascripts -->
    <script src="/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
    <script src="/assets/plugins/materialize/js/materialize.min.js"></script>
    <script src="/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
    <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="/assets/plugins/google-code-prettify/prettify.js"></script>
    <script src="/assets/js/alpha.min.js"></script>
    <script src="/assets/js/pages/ui-parallax.js"></script>

</body>

</html>
