@extends('layouts.frontend')

@section('body-content')
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