	@extends("frontend.layouts.main")
    <!-- End Main Header -->
	@push('title')
		<title>Contact Us</title>
	@endpush	
	@section("main-container")
	@include("frontend.layouts.sidebar")
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="{{ url('frontend/assets/images/logo.png') }}" alt="" /></a>
							</div>
							<div class="content-box">
								<h4>About Us</h4>
								<p class="text">I am glad that you have made it here to send a distress signal, and inform the Senate that all on board killed. Dantooine. I’m not going to Alderaan. I really got to go. But that to me.</p>
								<a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h4>Contact Info</h4>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>avarton@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	
	<!-- Page Title Section -->
	<section class="page-title" style="background-image: url({{ url('frontend/assets/images/background/2.jpg') }})">
		<div class="auto-container">
			<div class="content">
				<div class="text">Welcome to our company</div>
				<h1>Get In Touch</h1>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!-- Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<div class="clearfix">
				<div class="map-box">
					<h4>Location Info</h4>
					<ul class="contact-list">
						<li>
							<span class="icon flaticon-telephone"></span>
							9863 - 9867 Mill Road, <br> Cambridge, MG09 99HT<br>
							<a href="#" class="direction">Get Direction</a>
						</li>
						<li>
							<span class="icon flaticon-email-1"></span>
							<a href="mailto:info@companyname.com">info@companyname.com</a>
						</li>
						<li>
							<span class="icon flaticon-clock"></span>
							Friday-Sunday: 8:00am-6pm
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="outer-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{ url('frontend/assets/images/resource/contact-1.jpg') }}" alt="" />
						</div>
						<div class="image-two">
							<img src="{{ url('frontend/assets/images/resource/contact-2.jpg') }}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title color-three">Get In Touch</div>
							<h2>Make Custom Request</h2>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							{!! Form::open([
								"method" => "post",
								"url" => "https://html.themexriver.com/avarton/blog.html",
								"id" => "contact-form",
								"enctype" => "multipart/form-data"
							]) !!}
								<div class="row clearfix">
								
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<span class="icon flaticon-user-4"></span>
										<input type="text" name="username" placeholder="Enter Name" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<span class="icon flaticon-envelope"></span>
										<input type="email" name="email" placeholder="E-Mail Address" required>
									</div>
									
									<!--Form Group-->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<span class="icon flaticon-notebook"></span>
										<select name="country" class="custom-select-box">
											<option>Select Subject</option>
											<option>Subject 01</option>
											<option>Subject 02</option>
											<option>Subject 03</option>
											<option>Subject 04</option>
										</select>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<span class="icon flaticon-pen"></span>
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Get a quote</span></button>
									</div>
									
								</div>
							{!! Form::close() !!}
								
						</div>
						<!-- eND Contact Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	
	<!-- Main Footer -->
    @endsection