	@extends("frontend.layouts.main")
    @push("title")
	<title>About Us</title>
	@endpush
	<!-- End Main Header -->
	@section("main-container")	
	@include("frontend.layouts.sidebar")
	
	<!-- Page Title Section -->
	<section class="page-title" style="background-image: url({{ url('frontend/assets/images/background/1.jpg') }})">
		<div class="auto-container">
			<div class="content">
				<div class="text">Welcome to our company</div>
				<h1>About Us</h1>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>About us</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!-- Experiance Section -->
	<section class="experiance-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Experiance Column -->
				<div class="experiance-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="experiance">
							<img src="{{ url('frontend/assets/images/resource/years.png') }}" alt="" />
						</div>
						<div class="peoples">We Serve Peoples Like A Pro</div>
						<div class="text-center">
							<a href="tel:+786-904-781-67" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>786. 904. 781. 67</a>
						</div>
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
							
								<!-- Feature Block -->
								<div class="feature-block">
									<div class="inner-box">
										<div class="content">
											<div class="icon flaticon-work-table"></div>
											<h5>Brightest Minds</h5>
											<div class="text">Dramatically maintain clicks & mortar for the solutions.</div>
										</div>
									</div>
								</div>
								
								<!-- Feature Block -->
								<div class="feature-block">
									<div class="inner-box">
										<div class="content">
											<div class="icon flaticon-notepad"></div>
											<h5>Engage Users</h5>
											<div class="text">Dramatically maintain clicks & mortar for the solutions.</div>
										</div>
									</div>
								</div>
								
								<!-- Feature Block -->
								<div class="feature-block">
									<div class="inner-box">
										<div class="content">
											<div class="icon flaticon-globe-1"></div>
											<h5>Business Solutions</h5>
											<div class="text">Dramatically maintain clicks & mortar for the solutions.</div>
										</div>
									</div>
								</div>
								
							</div>
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								
								<!-- Feature Block -->
								<div class="feature-block">
									<div class="inner-box">
										<div class="content">
											<div class="icon flaticon-science-research"></div>
											<h5>Wherever You Go</h5>
											<div class="text">Dramatically maintain clicks & mortar for the solutions.</div>
										</div>
									</div>
								</div>
								
								<!-- Feature Block -->
								<div class="feature-block">
									<div class="inner-box">
										<div class="content">
											<div class="icon flaticon-trophy"></div>
											<h5>Custom Preference</h5>
											<div class="text">Dramatically maintain clicks & mortar for the solutions.</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Experiance Section -->
	
	<!-- History Section -->
	<section class="history-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title color-four">Journey</div>
				<h2>Company History</h2>
			</div>
			<!-- End Sec Title -->
			<div class="inner-container">
			
				<!-- Rocket Icon -->
				<div class="rocket-icon flaticon-rocket"></div>
				<!-- End Rocket Icon -->
				
				<!-- History Block -->
				<div class="history-block">
					<div class="inner-box">
						<div class="row clearfix">
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2000</div>
								</div>
							</div>
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details.html"><img src="{{ url('frontend/assets/images/resource/year-1.jpg') }}" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details.html">Journey Was Started</a></h3>
									<div class="text">I am glad that you have made it here to send a distress signal, and inform the Senate that all on board were killed. Dantooine is ready.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- History Block -->
				<div class="history-block style-two">
					<div class="inner-box">
						<div class="row clearfix">
							
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details.html">Journey Was Started</a></h3>
									<div class="text">I am glad that you have made it here to send a distress signal, and inform the Senate that all on board were killed. Dantooine is ready.</div>
								</div>
							</div>
							
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details.html"><img src="{{ url('frontend/assets/images/resource/year-2.jpg') }}" alt="" /></a>
									</div>
								</div>
							</div>
							
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2010</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- History Block -->
				<div class="history-block">
					<div class="inner-box">
						<div class="row clearfix">
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2018</div>
								</div>
							</div>
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details.html"><img src="{{ url('frontend/assets/images/resource/year-3.jpg') }}" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details.html">Journey Was Started</a></h3>
									<div class="text">I am glad that you have made it here to send a distress signal, and inform the Senate that all on board were killed. Dantooine is ready.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- History Block -->
				<div class="history-block style-two">
					<div class="inner-box">
						<div class="row clearfix">
							
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details.html">Journey Was Started</a></h3>
									<div class="text">I am glad that you have made it here to send a distress signal, and inform the Senate that all on board were killed. Dantooine is ready.</div>
								</div>
							</div>
							
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details.html"><img src="{{ url('frontend/assets/images/resource/year-4.jpg') }}" alt="" /></a>
									</div>
								</div>
							</div>
							
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2022</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- Plus Icon -->
				<div class="plus-icon flaticon-plus"></div>
				<!-- End Plus Icon -->
				
			</div>
		</div>
	</section>
	<!-- End History Section -->
	
	<!-- Skill Section -->
	<section class="skill-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Skill Column -->
				<div class="skill-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title color-three">Skillset</div>
							<h2>Self Development Skillset</h2>
							<div class="text">I am glad that you have made it here to send a distress signal, & inform the Senate that all on board were killed. Dantooine.</div>
						</div>
						
						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Strategy Consulting</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="70">
											<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="70">0</span>%</div></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Operations Careers</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="64">
											<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="64">0</span>%</div></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Management Consulting</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner">
										<div class="bar progress-line" data-width="80">
											<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
										</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image titlt" data-tilt data-tilt-max="3">
							<img src="{{ url('frontend/assets/images/resource/skill.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Skill Section -->
	
	<!-- Sponsors Section -->
    <section class="sponsors-section">
		<div class="big-text">Clients</div>
        <div class="auto-container">
            <div class="sponsors-outer">
                <!-- Sponsors Carousel -->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/5.png')}}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/6.png')}}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/1.png')}}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/2.png')}}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/5.png')}}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ url('frontend/assets/images/clients/6.png')}}" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!-- End Sponsors Section -->
	
	<!-- Main Footer -->
    @endsection