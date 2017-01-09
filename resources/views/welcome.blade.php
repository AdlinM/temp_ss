<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from steelcoders.com/alpha/v1.2/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 24 Oct 2016 05:04:20 GMT -->
<head>
        <!-- Title -->
        <title>{{ config('app.name','ShangriLa') }}</title>

        <link rel="icon" type="image/png" href="\assets\images\logo-ico.png">

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

        <link href="assets/plugins/google-grid-gallery/css/component.css" rel="stylesheet">

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

          h3 {
            font-weight: 300;
          }
        </style>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script>
          function htmlEncode(value){
            return $('<div/>').text(value).html();
          }

          function htmlDecode(value){
            return $('<div/>').html(value).text();
          }
        </script>
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
                    @if (Auth::check() == true)
                        <a href="{{ url('/home') }}" class="waves-effect waves-grey btn-flat text-white"> Admin Panel</a>
                    @else
                         <a href="{{ url('/login') }}" class="waves-effect waves-grey btn-flat text-white"> Sign In </a>
                          <!--&nbsp;
                         <a href="{{ url('/register') }}" class="waves-effect waves-grey btn-flat text-white"> Register </a>-->
                    @endif
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
                            <h5><p align="justify" class="text-white">Shangri-La (Sharing and Caring Latest Activity with SMS Gateway) berbasis web dengan SMS Gateway fungsi Shangri-La adalah untuk memudahkan menghubungkan setiap anggota organisasi</p></h5><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <div class=" " style="padding: 70px 100px;">
                        <div>
                            <h5><p align="justify"><strong>ShangriLa</strong> Berawal dari Gagasan Sederhana</p></h5>
                            <p>Sebuah pelatihan yang bertujuan untuk memperluas wawasan, meningkatkan kompetensi, dan menanamkan pilar-pilar karakter dan kepemimpinan sekaligus memperluas jaringan dari pesertanya. Pelatihan ini dikemas dalam bentuk diskusi, simulasi, workshop, games, outbond, serta unjuk ekspresi. Hingga saat ini, FIM memiliki alumni pemuda dan mahasiswa dengan jumlah lebih dari 2000 orang yang tersebar di seluruh Indonesia dengan latar belakang minat dan aktivitas seperti pendidikan, kerelawanan, pemberdayaan masyarakat, lingkungan, sosial politik ekonomi, seni dan budaya. dalam kegiatan online maupun offline.</p>
                        </div>
                    </div>
                </div>

                <div class="col s6">
                    <div class=" ">
                        <div class="center">
                            <img src="\assets\images\organisasi.jpg">
                        </div>
                    </div>
                </div>
            </div>

           <div class="row text-white" style="background:gray;">
             <div class="col s12">
                <h3 class="center" style="padding:50px 0px"> Kami akan terus berkembang</h3>
             </div>
             <div class="col s4 center"><i class="material-icons">more_vert</i><h1>{{ $ActCount[0]->eventCount }}</h1>Pelatihan</div>
             <div class="col s4 center"><i class="material-icons">more_vert</i><h1>{{ $ActCount[0]->AngkatanCount }}</h1>Angkatan</div>
             <div class="col s4 center"><i class="material-icons">more_vert</i><h1>{{ $ActCount[0]->memberCount }}</h1>Anggota</div>
             <div class="col s12" style="margin:40px"></div>
           </div>

            <div class="row" style="background-color:rgb(244, 244, 244);">
              <div class="col s12">
                    <div id="grid-gallery" class="grid-gallery">
                    	<section class="grid-wrap">
                    		<ul class="grid">
                    			<li class="grid-sizer"></li><!-- for Masonry column width -->
                          @foreach($article as $a)
                          <a href="{{ url('/articlepage', ['id'=>$a->id]) }}">
                      			<li>
                      				<figure>
                      					<img src="assets/plugins/google-grid-gallery/img/thumb/{{ $i++ }}.png" alt="img01"/>
                      					<figcaption>
                                  <h5 class="flow-text">{{ $a->judul }}</h5>
                                  <p id="article-{{ $a->id}}">
                                    <script>
                                      var artic = '#article-{{ $a->id}}';
                                      $(artic).append(htmlDecode("{{ $a->content }}"));
                                      var articLen = $(artic + ' > p').length;
                                      if(articLen > 3) {
                                        $(artic + ' > p:nth-of-type(3)').addClass("truncate");
                                        $(artic + ' > p:nth-of-type(4)').addClass("truncate");
                                        $(artic + ' > p:nth-of-type(4)').nextAll('p').remove();
                                      }

                                      var articLen = $(artic + ' > span').length;
                                      if(articLen > 3) {
                                        $(artic + ' > span:nth-of-type(3)').addClass("truncate");
                                        $(artic + ' > span:nth-of-type(4)').addClass("truncate");
                                        $(artic + ' > span:nth-of-type(4)').nextAll('span').remove();
                                      }

                                      var articLen = $(artic + ' > div').length;
                                      if(articLen > 3) {
                                        $(artic + ' > div:nth-of-type(3)').addClass("truncate");
                                        $(artic + ' > div:nth-of-type(4)').addClass("truncate");
                                        $(artic + ' > div:nth-of-type(4)').nextAll('div').remove();
                                      }
                                      /*$(artic + " > div" ).click(function() {
                                        // `this` is the DOM element that was clicked
                                        var index = $(artic + " > div" ).index( this );
                                        alert("That was div index #" + index );
                                      });*/
                                    </script>
                                </figcaption>
                      				</figure>
                      			</li>
                          </a>
                          @endforeach
                    		</ul>
                    	</section><!-- // grid-wrap -->
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="parallax-container">
                <div class="row" >
                  <div class="col s12"></div>
                  <div class="col m6">
                    <h3 class="center text-white">About US</h3>
                  </div>
                  <div class="col m6">
                    <h3 class="center text-white">Share Twitter</h3>
                  </div>
                </div>
                  <div class="parallax"><img src="assets/images/mountains3.png"></div>

              </div>
            </div>
    </div>
    <div class="left-sidebar-hover"></div>

    <!-- Javascripts -->
    <script src="assets/plugins/google-grid-gallery/js/modernizr.custom.js"></script>
    <script src="/assets/plugins/materialize/js/materialize.min.js"></script>
    <script src="/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
    <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="/assets/plugins/google-code-prettify/prettify.js"></script>

    <script src="/assets/js/alpha.min.js"></script>
    <script src="/assets/js/pages/ui-parallax.js"></script>

    <script>
    $(function(){
      $('#grid-gallery .grid-wrap figcaption').find('img').remove();
      $('#grid-gallery .grid-wrap figcaption span').removeAttr('style');
    });
  </script>

</body>

</html>
