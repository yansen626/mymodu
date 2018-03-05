@extends('layouts.frontend')

@section('body-content')

	<!-- Hero 5 Section -->
	<div class="section-block hero-5 right show-media-column-on-mobile bkg-gradient-purple-haze" style="padding-top: 6rem !important;">
		<div class="media-column width-6">
			<div class="map-container" data-coordinates="[[-6.333718, 106.676967]]" data-icon='"{{ URL::asset('images/map-marker.png') }}"' data-info='"Taman Tekno BSD, <br>Sektor XI Blok-L-1, No. 11, Serpong<br>Tangerang, Indonesia"' data-zoom-level="18">
				<div id="map-canvas"></div>
			</div>
		</div>
		<div class="row">
			<div class="column width-5">
				<div class="hero-content split-hero-content">
					<div class="hero-content-inner left">
						<h3 class="mb-30 color-white">Address</h3>
						<p class="color-white">Taman Tekno BSD, Sektor XI Blok-L-1, No. 11, Serpong<br> Tangerang,<br> 15314, Indonesia.</p>
						<br>
						<h3 class="mb-30 color-white">Contact</h3>
						<p class="color-white">Telephone: +62-21 75880544, 547<br>Fax: +62-21-75880543<br>E-Mail: asdfasdf@fasd.com<br>Website: http://www.afsdfasdf.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero 5 Section End -->

	<!-- Content -->
	<div class="content clearfix">
		<!-- Form Style Default -->
		<div class="section-block replicable-content bkg-grey-ultralight">
			<div class="row">
				@if(\Illuminate\Support\Facades\Session::has('message'))
					<div class="column width-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							{{ \Illuminate\Support\Facades\Session::get('message') }}
						</div>
					</div>
				@endif
				<div class="column width-4">
					<h3 class="mb-50">Contact Us Form</h3>
				</div>
				<div class="column width-8">
					<div class="contact-form-container">
						{{ Form::open(['route'=>['contact-us-post'],'method' => 'post','class'=>'form-horizontal form-label-left']) }}
						<form class="contact-form" action="{{ route('contact-us-post') }}" method="POST">
							<div class="row">
								<div class="column width-12">
									<div class="field-wrapper">
										<input type="text" name="name" class="form-fname form-element rounded medium" placeholder="Name*" tabindex="1" required>
									</div>
								</div>
								<div class="column width-12">
									<div class="field-wrapper">
										<input type="email" name="email" class="form-email form-element rounded medium" placeholder="Email address*" tabindex="3" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="column width-12">
									<div class="field-wrapper">
										<textarea name="description" class="form-message form-element rounded medium" placeholder="Message*" tabindex="7" required></textarea>
									</div>
									<input type="submit" value="Send Email" class="form-submit button rounded medium bkg-theme bkg-hover-theme color-white color-hover-white">
								</div>
							</div>
						</form>
						<div class="form-response"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Form Style Default End -->
	</div>
	<!-- Content End -->
@endsection