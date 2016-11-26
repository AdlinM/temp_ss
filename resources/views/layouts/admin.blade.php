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
        @yield('styles')

        <!-- Theme Styles -->
        <link href="/assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>


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
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">
                            <span class="chapter-title">{{ config('app.name','Shangri La') }}</span>
                        </div>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">more_vert</i></a></li>
                            <!--<li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>-->
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul>

                        <!--<ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li class="notification-drop-title">Today</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                            <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                            <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                            <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                            <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                            <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="notification-drop-title">Yestarday</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                            <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                            <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                            <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>-->
                        <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                           class="waves-effect waves-grey">
                                             <div class="notification">
                                                   <div class="notification-icon circle cyan"><i class="material-icons">exit_to_app</i></div>
                                                 <div class="notification-text"><p>Sign Out</p></div>
                                             </div>
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="/assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                                <p>{{ Auth::user()->name }}</p>
                                <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active">
                      <a class="waves-effect waves-grey" href="{{ url('/home') }}"><i class="material-icons">settings_input_svideo</i>Dashboard</a>
                    </li>
                    <li class="no-padding">
                      <a class="waves-effect waves-grey" href="{{ url('/member') }}"><i class="material-icons">contacts</i>Data Anggota</a>
                    </li>
                    <li class="no-padding">
                      <a class="waves-effect waves-grey"><i class="material-icons">grade</i>Acara Seminar</a>
                    </li>
                    <li class="no-padding">
                      <a class="waves-effect waves-grey"><i class="material-icons">question_answer</i>Message Broadcast</a>
                    </li>
                    <li class="no-padding">
                      <a class="waves-effect waves-grey"><i class="material-icons">library_books</i>Artikel dan Kegiatan</a>
                    </li>
                    <li class="divider"></li>
                    <li class="no-padding">
                      <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Keluar</a>
                    </li>
                </ul>
                <div class="footer">
                    <p class="copyright">Copyrights <!--Steelcoders--> © 2016</p>
                </div>
                </div>
            </aside>
            <main class="mn-inner inner-active-sidebar">
              @yield('content')
            </main>
        </div>
        <div class="left-sidebar-hover"></div>

        <!-- Javascripts -->
        <script src="/assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="/assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="/assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        @yield('scripts')
        <script src="/assets/js/alpha.min.js"></script>
        <script>
          $(document).ready(function(){
            console.log(window.location.href);
          });
        </script>

    </body>

</html>
