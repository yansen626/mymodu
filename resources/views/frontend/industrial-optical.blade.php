@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-11 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Optical Handling Industry</h3>
                    <img class="column width-4" src="{{ URL::asset('images/industrial/optical-pic-1.jpg') }}" alt=""/>
                    <p>MODU conveyors can aptly handle standard lens trays that are mandatory in ophthalmic industry.</p>
                    <p>At MODU, the focus is on utilizing best techniques to promptly transport lenses around the factory. We are committed in designing a conveyor system which will ensure each machine, from generating, polishing, centering, marking and blocking, is constantly supplied with product to reduce the idle time of machines to the minimum.</p>
                    <p>We have a rich experience in distributing world’s leading machines from companies like Automation & Robotics (A&R), Schneider Gmbh, Satisloh and Nidek.</p>
                    <p>We are expert in designing and installing systems for small lens manufacturers up to giant companies like Specsavers and Nikon Optical. Our systems are developed with standard modules including Stop Gates, Lane Diverters, Side Tray Pushers, Tray Turners and Vertical Lifters.</p>


                    <h3>M5000 Series Vertical Elevators</h3>

                    <div class="column width-8">
                        <p>M5000 Series Vertical Elevators offer a compact method of elevating or lowering products. They work most efficiently where space is restricted and access to machines is required to be maintained. With the use of this product, items can be lifted above walkways or other equipment so that, conveyors can feed product to different areas of the factory. This product is also often used to transfer product through mezzanine floors. Typical specifications of the product are:</p>
                        <ul style="list-style-image: none;">
                            <li>Compact 500mm square frame takes up minimum floor space.</li>
                            <li>Relocates product through mezzanine floors or above walkways to sustain access to machines.</li>
                            <li>Allocate heights up to 3.5 meters.</li>
                            <li>Cycle times of 8 to 16 seconds conditional on the lift length.</li>
                            <li>Lockable door that comes with a guard switch.</li>
                            <li>Small PLC controller and a comprehensive factory control system.</li>
                            <li>Tranquility of integration into machines or conveyors.</li>
                        </ul>
                    </div>
                    <div class="column width-4">
                        <img src="{{ URL::asset('images/industrial/optical-pic-2.jpg') }}" alt=""/>
                    </div>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/optical-1.jpg') }}" href="{{ URL::asset('images/industrial/optical-1.jpg') }}" data-lightbox-animation="fadeIn">
                                            <img src="{{ URL::asset('images/industrial/optical-1.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
														<i class="fas fa-search fa-3x"></i>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design photography">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/optical-2.jpg') }}" href="{{ URL::asset('images/industrial/optical-2.jpg') }}" data-lightbox-animation="slideInTop">
                                            <img src="{{ URL::asset('images/industrial/optical-2.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
														<i class="fas fa-search fa-3x"></i>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/optical-3.jpg') }}" href="{{ URL::asset('images/industrial/optical-3.jpg') }}" data-lightbox-animation="slideInRight">
                                            <img src="{{ URL::asset('images/industrial/optical-3.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
														<i class="fas fa-search fa-3x"></i>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/optical-4.jpg') }}" href="{{ URL::asset('images/industrial/optical-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                            <img src="{{ URL::asset('images/industrial/optical-4.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
														<i class="fas fa-search fa-3x"></i>
													</span>
												</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid-item design identity">
                                    <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/optical-5.jpg') }}" href="{{ URL::asset('images/industrial/optical-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/optical-5.jpg') }}" alt="" style="height:200px;"/>
                                            <span class="overlay-info center">
												<span>
													<span>
														<i class="fas fa-search fa-3x"></i>
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

    <!-- Download Section -->
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-9 offset-1 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Download Leaflet</h3>
                    <i class="far fa-arrow-alt-circle-down"></i>
                    <a href="{{route('download', ['filename' => 'Optical Handling.pdf'])}}"><span>Optical Handling</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Download Section End -->

    <!-- YouTube Video -->
    <div class="section-block pt-80 pb-0">
        <div class="row">
            <div class="column width-10 offset-1 center">
                <h3 class="mb-50">Examples</h3>
                <div class="video-container">
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/UI0nDZpp_34" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video End -->
@endsection