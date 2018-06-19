<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COVENTISMIND | Solutions informatiques</title>

    <!-- Favicon -->
    {{-- <img src="{{URL::asset('storage/theme/images/coventusmind-logo.jpg')}}" type="image/x-icon" /> --}}
    <!-- Bootstrap CSS -->
    <link href="{{ asset('theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset('theme/vendors/animate/animate.css')}}" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="{{ asset('theme/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="{{ asset('theme/vendors/camera-slider/camera.css')}}">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/owl_carousel/owl.carousel.css')}}" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css')}}" media="all" />
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+212637452897</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>contact@mmteams.com</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Lundi - Vendredi 09:00 - 18:00</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"> <img src="{{URL::asset('storage/theme/images/coventusmind-logo.jpg')}}"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{url('/')}}" >Acceuil</a></li>
                      <li><a href="#apropos" >A propos de nous</a></li>
                        <li><a href="#Nos_Services">Nos Services</a></li>
                        {{-- <li><a href="#">Blog</a> </li> --}}
                        <li><a href="#contact" >Contact</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->
    
    <!-- section -->
     @yield('content')
    <!-- End section -->

    <!-- Footer Area -->
    <footer class="footer_area">
      
        <div class="copyright_area">
            Copyright 2018 Tous droits réservés. À <a href="{{url('/')}}"> MMTEAMS. </a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="{{ asset('theme/js/jquery-1.12.0.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('theme/js/bootstrap.min.js')}}"></script>
    <!-- Animate JS -->
    <script src="{{ asset('theme/vendors/animate/wow.min.js')}}"></script>
    <!-- Camera Slider -->
    <script src="{{ asset('theme/vendors/camera-slider/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('theme/vendors/camera-slider/camera.min.js')}}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('theme/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('theme/vendors/isotope/isotope.pkgd.min.js')}}"></script>
    <!-- Progress JS -->
    <script src="{{ asset('theme/vendors/Counter-Up/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('theme/vendors/Counter-Up/waypoints.min.js')}}"></script>
    <!-- Owlcarousel JS -->
    <script src="{{ asset('theme/vendors/owl_carousel/owl.carousel.min.js')}}"></script>
    <!-- Stellar JS -->
    <script src="{{ asset('theme/vendors/stellar/jquery.stellar.js')}}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('theme/js/theme.js')}}"></script>
</body>
</html>
