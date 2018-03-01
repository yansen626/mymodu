@extends('layouts.frontend')

@section('body-content')
	<!-- Content -->
	<div class="content clearfix">

		<!-- Fullscreen Slider Section -->
		<div id="carousel-slider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators visible-xs">
				<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-slider" data-slide-to="1"></li>
				<li data-target="#carousel-slider" data-slide-to="2"></li>
				<li data-target="#carousel-slider" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="{{ URL::asset('images/index.jpg') }}" class="img-responsive" style="width:100%;" alt="">
				</div>
				<div class="item">
					<img src="{{ URL::asset('images/index2.jpg') }}" class="img-responsive"style="width:100%;"  alt="">
				</div>
				<div class="item">
					<img src="{{ URL::asset('images/index3.jpg') }}" class="img-responsive" style="width:100%;" alt="">
				</div>
				<div class="item">
					<img src="{{ URL::asset('images/index4.jpg') }}" class="img-responsive"style="width:100%;"  alt="">
				</div>
			</div>
		</div>
		<!-- Fullscreen Slider Section End -->

		<!-- Mobile Section -->
		<div class="section-block pb-0 bkg-blue">
			<div class="row flex">
				<div class="column width-5 push-6 mb-mobile-40 v-align-middle">
					<div>
						<h5 class="mb-10 color-white opacity-07">Flexible Design - Simple Assembly</h5>
						<h3 class="color-white">Aluminum Conveyor - A simple concept of Modular & Flexible </h3>
						<p class="color-white">MODU conveyors are modular and flexible, which makes them very cost effective. The straights, supports, and bends are made up of various re-assembled components. Therefore a conveyor can be installed or reconfigured (realigned, extended or shortened) within a very short time-frame easily by using simple tools.</p>
					</div>
				</div>
				<div class="column width-6 pull-5 v-align-middle center">
					<div class="thumbnail mb-0 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">
						<img src="{{ URL::asset('images/FrontAluminium.jpg') }}" width="350" alt=""/>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Section End -->

		<!-- Mobile Section -->
		<div class="section-block pb-0 bkg-white">
			<div class="row flex">
				<div class="column width-5 offset-1 mb-mobile-40 v-align-middle">
					<div>
						<h3>MODU 20th Anniversary</h3>
						<p>MODU System is very pleased to announce that we are celebrating the twentieth anniversary since our founding, marking twenty successful years of material handling business operations in every major industry across the globe.</p>
					</div>
				</div>
				<div class="column width-6 v-align-middle center">
					<div class="thumbnail mb-0 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
						<img src="{{ URL::asset('images/website-anniversary.png') }}" width="350" alt=""/>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Section End -->


		<!-- Feature Section 3 -->
		<div class="section-block feature-3 pb-0 bkg-white">
			<div class="row flex">
				<div class="column width-8 offset-2 center">
					<div class="feature-content">
						<div class="feature-content-inner pt-80 pt-mobile-80 pb-80">
							<h3 class="mb-20">MODU's All New Plastic Belt Conveyor</h3>
						</div>
					</div>
				</div>
				<div class="column width-12">
					<div class="feature-image center">
						<div class="feature-image-inner no-padding-on-mobile">
							<img src="{{ URL::asset('images/001.jpg') }}" width="900" alt=""/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Feature Section 3 -->

		<!-- Product Grid -->
		<div id="product-grid" class="section-block products fade-in-progressively pt-40" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
			<div class="row">
				<div class="">
					<div class="row">
						<div class=" product headphones col-md-3">
							<div class="thumbnail rounded product-thumbnail border-grey-light img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
								<a class="overlay-link" href="single-product-device.html">
									<img src="{{ URL::asset('images/Conveyors.jpg') }}" alt=""/>
									<span class="overlay-info">
										<span>
											<span>
												Wide range of conveyors are available to meet your requirement.
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="product-details center">
								<h3 class="product-title text-truncate">
									<a href="#">
										Conveyor System
									</a>
								</h3>
							</div>
						</div>
						<div class=" product speakers col-md-3">
							<div class="thumbnail rounded product-thumbnail border-grey-light img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
								<a class="overlay-link" href="single-product-device.html">
									<img src="{{ URL::asset('images/Industry.jpg') }}" alt=""/>
									<span class="overlay-info">
										<span>
											<span>
												Turnkey solutions for various industries.
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="product-details center">
								<h3 class="product-title text-truncate">
									<a href="#">
										Industry Expertise
									</a>
								</h3>
							</div>
						</div>
						<div class=" product keyboards col-md-3">
							<div class="thumbnail rounded product-thumbnail border-grey-light img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
								<a class="overlay-link" href="single-product-device.html">
									<img src="{{ URL::asset('images/Handling.jpg') }}" alt=""/>
									<span class="overlay-info">
										<span>
											<span>
												Flexible and reliable solutions to increase production efficiency and manufacturing processes.
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="product-details center">
								<h3 class="product-title text-truncate">
									<a href="#">
										Handling Solution
									</a>
								</h3>
							</div>
						</div>
						<div class=" product phones col-md-3">
							<div class="thumbnail rounded product-thumbnail border-grey-light img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
								<a class="overlay-link" href="single-product-device.html">
									<img src="{{ URL::asset('images/Palletizing.jpg') }}" alt=""/>
									<span class="overlay-info">
										<span>
											<span>
												Ensuring smoother, safer project implementation with our palletizing solutions.
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="product-details center">
								<h3 class="product-title text-truncate">
									<a href="#">
										Palletizing
									</a>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Product Grid End -->

		<div class="col-md-12">
			<img src="{{ URL::asset('images/FS.jpg') }}" alt=""/>
		</div>
	</div>
	<!-- Content End -->
@endsection