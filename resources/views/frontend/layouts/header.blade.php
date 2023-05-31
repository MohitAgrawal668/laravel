<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/avarton/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 05:59:09 GMT -->
<head>
<meta charset="utf-8">
@stack("title")
<!-- Stylesheets -->
<link href="{{ url('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ url('frontend/assets/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ url('frontend/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ url('frontend/assets/images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Header Style One -->
    <header class="main-header">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
					<!-- Top Left -->
					<div class="top-left clearfix">
						<div class="text"><span>Working time:</span> Monday to Friday 9 AM - 5 PM</div>
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right clearfix">
						<!-- Social Box -->
						<ul class="social-box">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
							<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
							<li><a href="https://www.behance.com/" class="fa fa-behance"></a></li>
							<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
							<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
						</ul>
						<div class="text">Call for free consultation: <a href="tel:+0056-693-55-20">0056 693 55 20</a></div>
                    </div>
					
                </div>
            </div>
        </div>
		
		<!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
            	
				<!-- Logo Box -->
				<div class="pull-left logo-box">
					<div class="logo"><a href="{{route('frontend.home')}}"><img src="{{ url('frontend/assets/images/logo.png') }}" alt="" title=""></a></div>
				</div>
				
				<!-- Nav Outer -->
				<div class="nav-outer clearfix">
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class="current"><a href="{{route('frontend.home')}}">Home</a></li>
								<li><a href="{{route('frontend.about')}}">About Us</a></li>
								<li><a href="{{route('frontend.services')}}">Services</a></li>
                                <li><a href="{{route('frontend.article')}}">Articles</a></li>
								<li><a href="{{route('frontend.event')}}">Events</a></li>
								<li><a href="{{route('frontend.contact')}}">Contact</a></li>
							</ul>
						</div>
					</nav>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Search Btn -->
						<div class="search-box-btn transition-300ms"><span class="icon fa fa-search"></span></div>
						
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button transition-300ms"><span class="icon flaticon-menu-1"></span></div>
							
					</div>
				</div>
				
            </div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('frontend.home')}}" title=""><img src="{{ url('frontend/assets/images/logo-small.png') }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
				
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('frontend.home')}}"><img src="{{ url('frontend/assets/images/logo-small.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>