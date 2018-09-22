@extends('layouts.frontend')

@section('body-content')

	<!-- Content -->
	<div class="content clearfix">

		<!-- Intro Title Section 1 -->
		<div class="section-block intro-title-1 small">
			<div class="row">
				<div class="column width-12">
					<div class="title-container">
						<div class="title-container-inner">
							<div class="row flex">
								<div class="column width-6 v-align-middle">
									<div>
										<h1 class="mb-0">Our Customer</h1>
										{{--<p class="lead mb-0 mb-mobile-20">Selected work from 2017</p>--}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Intro Title Section 1 End -->

		<!-- Portfolio Grid -->
		{{--<div class="section-block pt-0 grid-filter-menu center" data-target-grid="#portfolio-grid">--}}
			{{--<div class="freeze pt-10 pb-10 bkg-white" data-extra-space-top="80" data-extra-space-bottom="0">--}}
				{{--<div class="row">--}}
					{{--<div class="column width-12">--}}
						{{--<div class="filter-menu-inner">--}}
							{{--<ul>--}}
								{{--<li><a class="active" href="#" data-filter="*">All</a></li>--}}
								{{--<li><a href="#" data-filter=".design">Design</a></li>--}}
								{{--<li><a href="#" data-filter=".identity">Identity</a></li>--}}
								{{--<li><a href="#" data-filter=".photography">Photograhy</a></li>--}}
								{{--<li><a href="#" data-filter=".application">Applications</a></li>--}}
							{{--</ul>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		<div id="portfolio-grid" class="section-block grid-container fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-filter-duration="700" data-set-dimensions data-animate-resize data-animate-resize-duration="700" data-as-bkg-image>
			<div class="row">
				<div class="column width-12">
					<div class="row grid content-grid-3">
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/indofood-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
										<span>
											<span>
												<span class="project-title">Indofood</span>
												{{--<span class="project-description">Architectural photography</span>--}}
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/mayora-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
										<span>
											<span>
												<span class="project-title">PT Mayora</span>
												{{--<span class="project-description">Save the ocean</span>--}}
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/sinarmas-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
										<span>
											<span>
												<span class="project-title">Sinarmas</span>
												{{--<span class="project-description">Fashion Photography</span>--}}
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/unilever-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">PT Unilever</span>
														{{--<span class="project-description">Spring Campaign</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="50%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/nestle-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Nestle</span>
														{{--<span class="project-description">On the go</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/yasulor-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Loreal</span>
														{{--<span class="project-description">What design looks like</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/torabika-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Torabika</span>
														{{--<span class="project-description">All about timing</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/arnotts-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Arnotts</span>
														{{--<span class="project-description">Giving it a taste</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/indolakto-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Indolakto</span>
														{{--<span class="project-description">Wearable tech</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/otsuka-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Otsuka</span>
														{{--<span class="project-description">Wearable tech</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/PTKao-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">PT Kao</span>
														{{--<span class="project-description">Wearable tech</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/wilmar-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Wilmar</span>
														{{--<span class="project-description">Wearable tech</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/lionwing-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Lion Wing</span>
														{{--<span class="project-description">Wearable tech</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
						<div class="grid-item design identity">
							<div class="thumbnail rounded overlay-fade-img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-gradient data-gradient-spread="70%" data-hover-bkg-opacity="0.6">
								<a class="overlay-link" href="#">
									<img src="{{ URL::asset('images/customer/kobe-logo.png') }}" alt=""/>
									<span class="overlay-info v-align-bottom left color-white">
												<span>
													<span>
														<span class="project-title">Kobe</span>
														{{--<span class="project-description">Wearable tech</span>--}}
													</span>
												</span>
											</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Portfolio Grid End -->

	</div>
	<!-- Content End -->
@endsection