@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Personal & Pharmaceutical Industry </h3>
                    <p>Personal Products, Pharmaceutical & Clinical products successfully handled by MODU System:</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row flex">
        <div class="column width-3 v-align-middle">
            <div class="box rounded xlarge bkg-grey-light">
                <div>
                    <ul style="list-style-image: none;">
                        <li>Soap bars</li>
                        <li>Powder &amp; liquid detergent</li>
                        <li>Toothpaste</li>
                        <li>Hair care products</li>
                        <li>Aerosols</li>
                        <li>Sanitary Napkins</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column width-3 v-align-middle">
            <div class="box rounded xlarge bkg-grey-light">
                <div>
                    <ul style="list-style-image: none;">
                        <li>Health Supplements</li>
                        <li>Eyecare products</li>
                        <li>Hospital medical dispensers</li>
                        <li>Body lotions</li>
                        <li>Shower Creams</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Lightbox Images -->
    <div class="section-block bkg-grey-ultralight">
        <div class="row">
            <div class="column width-12 center">
                <h3>Project Photos</h3>

                <!-- Portfolio Grid -->
                <div class="grid-container fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1" data-animate-resize data-animate-resize-duration="0">
                    <div class="row">
                        <div class="column width-12">
                            <div class="row grid content-grid-3">
                                <div class="grid-item grid-sizer identity photography">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/pharmacy-1.jpg') }}" href="{{ URL::asset('images/industrial/pharmacy-1.jpg') }}" data-lightbox-animation="fadeIn">
                                            <img src="{{ URL::asset('images/industrial/pharmacy-1.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design photography">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/pharmacy-2.jpg') }}" href="{{ URL::asset('images/industrial/pharmacy-2.jpg') }}" data-lightbox-animation="slideInTop">
                                            <img src="{{ URL::asset('images/industrial/pharmacy-2.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/pharmacy-3.jpg') }}" href="{{ URL::asset('images/industrial/pharmacy-3.jpg') }}" data-lightbox-animation="slideInRight">
                                            <img src="{{ URL::asset('images/industrial/pharmacy-3.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/pharmacy-4.jpg') }}" href="{{ URL::asset('images/industrial/pharmacy-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                            <img src="{{ URL::asset('images/industrial/pharmacy-4.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/pharmacy-5.jpg') }}" href="{{ URL::asset('images/industrial/pharmacy-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/pharmacy-5.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/pharmacy-6.jpg') }}" href="{{ URL::asset('images/industrial/pharmacy-6.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/pharmacy-6.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
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
        </div>
    </div>
    <!-- Lightbox Images End -->

    <!-- YouTube Video -->
    <div class="section-block pt-80 pb-0">
        <div class="row">
            <div class="column width-10 offset-1 center">
                <h3 class="mb-50">Examples</h3>
                <div class="video-container">
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/MZtYB45e7MU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video End -->
@endsection