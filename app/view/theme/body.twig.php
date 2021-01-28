<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <?php require './source/config.php';?>  
<!-- Mirrored from codeglim.com/templates/meheraj/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2019 07:55:49 GMT -->
<head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
        <title>{% block title %} {% endblock %}</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{BASE}}public/img/icon.png">	
		
        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> 
	
		<link rel="stylesheet" href="{{BASE}}css/scroll.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/animate.min.css">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/font-awesome.min.css">
		
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/jquery.fancybox.min.css">
		
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/slicknav.min.css">
		
		<!-- Animate Text -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/animate-text.css">
		
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{BASE}}vendor/css/owl.theme.default.css">
        <link rel="stylesheet" href="{{BASE}}vendor/css/owl.carousel.min.css">
		
		<!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/bootstrap.min.css">
		
		<!-- Sufia StyleShet -->
        <link rel="stylesheet" href="{{BASE}}vendor/css/reset.css">	
        <link rel="stylesheet" href="{{BASE}}vendor/css/style.css">
        <link rel="stylesheet" href="{{BASE}}vendor/css/responsive.css">	
		
		<!-- Maheraj Template Color -->
		<link rel="stylesheet" href="{{BASE}}vendor/css/color/color1.css">
		<script type="text/javascript" src="{{BASE}}js/jQuery-2.1.3.min.js"></script>

		<!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="#" id="colors">	
    </head>
    <body>
	
		<!-- Preloader -->
		<div class="loader">
			<div class="loader-inner">
				<div class="k-line k-line11-1"></div>
				<div class="k-line k-line11-2"></div>
				<div class="k-line k-line11-3"></div>
				<div class="k-line k-line11-4"></div>
				<div class="k-line k-line11-5"></div>
			</div>
		</div>
		<!-- End Preloader -->
		
	
		
		
		<!-- Start Header -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<!-- Logo -->
							<a href="{{ BASE }}home"><div class="logo">
							<img src="{{ BASE }}public/img/icon.png" style="width:50px;margin-top:-8px;">
						</div></a>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-md-10 col-sm-12 col-xs-12">
						<div class="nav-area">
							<!-- Main Menu -->
							<nav class="mainmenu">
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav menu" style="font-family:calibri;">
										<li><a class="active" href="{{ BASE }}home"><i class="fa fa-home"></i>Pagina Inicial</a></li>
										<li><a href="{{ BASE }}noticias"><i class="fa fa-file-text-o"></i>Notícias</a></li>
										<li><a href="{{ BASE }}cursos"><i class="fa fa-graduation-cap"></i>Cursos</a></li>
										<li><a href="{{ BASE }}sobre"><i class="fa fa-question-circle"></i>Sobre Nós</a></li>
										<li><a href="{{ BASE }}eventos"><i class="fa  fa-bullseye"></i>Eventos</a></li>		
										<li><a href="{{ BASE }}matricular"><i class="fa fa fa-id-card"></i>Matricular-se</a></li>		
						
									</ul>
									<ul class="social-icon">
										<li><a href="#header"><i class="fa fa-plus"></i></a></li>
									</ul>
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
							</nav>
							<!--/ End Main Menu -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header -->
        {% block body %}{% endblock %}
	 
	
		<!-- Start Footer -->
		<footer id="footer">
			<!-- Arrow -->
			<div class="arrow">
				<a href="#personal-area" class="btn"><i class="fa fa-angle-up"></i></a>
			</div>
			<!--/ End Arrow -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Copyright -->
						<div class="copyright" style="font-family:calibri;">
							<p>{{ now | date('Y') }} &copy; IMPNamibe.</p>
						</div>
						<!--/ End Copyright -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!--/ End Social -->
					</div>
				</div>
			</div>
		</footer>
		<!--/ End Footer -->
		
		<!-- Jquery -->
		<script type="text/javascript" src="{{BASE}}vendor/js/jquery.min.js"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/colors.js"></script>
			
		<!-- Modernizr JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/modernizr.min.js"></script>
			
		<!-- WOW JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/wow.min.js"></script>
		
		<!-- Fancybox js -->
		<script type="text/javascript" src="{{BASE}}vendor/js/jquery.fancybox.min.js"></script>
		
		<!-- Animate Text JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/animate-text.js"></script>
		
		<!-- Mobile Menu JS -->
    	<script type="text/javascript" src="{{BASE}}vendor/js/jquery.slicknav.min.js"></script>
		
		<!-- Jquery Parallax -->
    	<script type="text/javascript" src="{{BASE}}vendor/js/jquery.stellar.min.js"></script>
		
		<!-- Jquery Easing -->
    	<script type="text/javascript" src="{{BASE}}vendor/js/easing.js"></script>
		
		<!-- One Page Nav JS -->
    	<script type="text/javascript" src="{{BASE}}vendor/js/jquery.nav.js"></script>
		
		<!-- Slider Carousel JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/owl.carousel.min.js"></script>

		<!-- Youtube Player JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/ytplayer.min.js"></script>

		<!-- Particle JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/particles.min.js"></script>
		
		<!-- Counter JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/waypoints.min.js"></script>
		<script type="text/javascript" src="{{BASE}}vendor/js/jquery.counterup.min.js"></script>
		
		<!-- Mixitup JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/isotope.pkgd.min.js"></script>
		
		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/bootstrap.min.js"></script>
		
		<!-- Main JS -->
		<script type="text/javascript" src="{{BASE}}vendor/js/main.js"></script>
	
	
		<script src="{{BASE}}public/js/faleConosco.js"></script>
    	<script src="{{BASE}}public/js/subscrever.js"></script>
	
	</body>

<!-- Mirrored from codeglim.com/templates/meheraj/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2019 07:59:01 GMT -->
</html>