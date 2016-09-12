<!DOCTYPE HTML>
<html class="no-js">

<!-- HEADER -->
<head>

    <!-- Basic Page Needs -->
    <link rel="icon" href="/favicon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Christ The Living Stone Fellowship</title>
    <meta name="description" content="Christ, The Living Stone Fellowship Official Website">
    <meta name="keywords" content="Church, Christ, Fellowship">
    <meta name="author" content="Alexander Paul P. Quinit">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- CSS -->
    <link href="/landing/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/landing/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="/landing/css/style.css" rel="stylesheet" type="text/css">
    <link href="/landing/vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="/landing/vendor/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">

    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="landing/css/ie.css" media="screen" /><![endif]-->
    <link href="/landing/css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->

    <!-- Color Style -->
    <link class="alt" href="/landing/colors/color1.css" rel="stylesheet" type="text/css">
    <link href="/landing/style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">

    <link href="/login/css/modal.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="/landing/js/modernizr.js"></script>
    <!-- Modernizr -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>

<!-- BODY-->
<body class="home">

<!-- Browser Check -->
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<!-- Content -->
<div class="body">

    <!-- Start Site Header -->
    @include('layouts.partial._SiteHeader')
    <!-- End Site Header -->

    <!-- Start Hero Slider -->
    @include('layouts.partial._HeroSlider')
    <!-- End Hero Slider -->

    <!-- Start Body Content -->
    @yield('content')
    <!-- End Body Content -->

    <!-- Start Gallery -->
    @include('layouts.partial._Gallery')
    <!-- End Gallery -->

    <!-- Start Site Footer -->
    @include('layouts.partial._SiteFooter')
    <!-- End Site Footer -->

</div>

<!-- Ticket  -->
<!-- Event Directions Popup -->
<div class="quick-info-overlay">
    <div class="quick-info-overlay-left accent-bg">
        <a href="#" class="btn-close"><i class="icon-delete"></i></a>
        <div class="event-info">
            <h3 class="event-title"> </h3>
            <div class="event-address"></div>
            <a href="#" class="btn btn-default btn-transparent btn-permalink">Full details</a>
        </div>
    </div>
    <div class="quick-info-overlay-right">
        <div id="event-directions"></div>
    </div>
</div>

<!-- Event Contact Modal Window -->
<div class="modal fade" id="Econtact" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="Econtact" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Contact Event Manager <span class="accent-color"></span></h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="fname" class="form-control" placeholder="First name (Required)">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lname" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your email (Required)">
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="phone" class="form-control" placeholder="Your phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea rows="3" cols="5" class="form-control" placeholder="Additional notes"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="donate" class="btn btn-primary btn-lg btn-block" value="Contact Now">
                </form>
            </div>
            <div class="modal-footer">
                <p class="small short">If you would prefer to call in for inquiries, please call 1800.785.876</p>
            </div>
        </div>
    </div>
</div>

<!-- Event Register Tickets -->
<div class="ticket-booking-wrapper">
    <a href="#" class="ticket-booking-close label-danger"><i class="icon icon-delete"></i></a>
    <div class="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3><strong>Book your</strong> <span>tickets</span></h3>
                </div>
                <div class="col-md-9">
                    <div class="event-ticket ticket-form">
                        <div class="event-ticket-left">
                            <div class="ticket-handle"></div>
                            <div class="ticket-cuts ticket-cuts-top"></div>
                            <div class="ticket-cuts ticket-cuts-bottom"></div>
                        </div>
                        <div class="event-ticket-right">
                            <div class="event-ticket-right-inner">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <span class="meta-data">Your ticket for</span>
                                        <h4 id="dy-event-title"></h4>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <span class="meta-data">Tickets count</span>
                                        <select class="form-control input-sm">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="event-ticket-info">
                                    <div class="row">
                                        <div class="col">
                                            <p class="ticket-col" id="dy-event-date"></p>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-warning btn btn-block ticket-col">Book</a>
                                        </div>
                                        <div class="col">
                                            <p id="dy-event-time">Starts </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="event-location" id="dy-event-location"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="/landing/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="/landing/vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="/landing/js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="/landing/js/bootstrap.js"></script> <!-- UI -->
<script src="/landing/js/init.js"></script> <!-- All Scripts -->
<script src="/landing/js/home.js"></script> <!-- All Scripts -->
<script src="/landing/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="/landing/vendor/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer -->
<script src="/landing/vendor/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/landing/style-switcher/js/jquery_cookie.js"></script>
<script src="/landing/style-switcher/js/script.js"></script>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Login to Your Account</h1><br>
            <form>
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>
        </div>
    </div>
</div>

</body>

</html>