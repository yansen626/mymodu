@extends('layouts.frontend')

@section('body-content')

    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-9 offset-1 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Tea Bags Handling Solution  </h3>
                    <p>MODU System provides competent tea bag handling solutions with flexible production flows and high throughput. Our conveyor systems are designed to integrate with both new and existing production equipment. Systems which are available to fulfill factory and operator requirement can easily be linked using suitable elements and conveyors from our modular range.</p>


                    <h3>Sample Layout  </h3>
                    <img src="{{ URL::asset('images/industrial/teabag-Layout.jpg') }}" alt=""/>

                    <h3>Products Offered  </h3>

                    <ul style="list-style-image: none;">
                        <li>
                            <h4>Conveyor System  </h4>
                            <p>MODU System habits standard profile conveyor system. The plain chain conveyor is used to carry empty or filled tea bag boxes from one phase to another. Friction chain conveyer is utilized wherever inclination is involved.</p>
                            <img src="{{ URL::asset('images/industrial/teabag-1a.png') }}" alt=""/>
                        </li>
                        <li>
                            <h4>Special Devices  </h4>
                            <p>MODU System personalized design of devices augments the process flow of tea bag handling. Our specifically planned devices contain empty boxes batch forming, gravity chute to suit variety of filled tea bag boxes, diverters and traffic controllers to smoothen the merger of filled boxes to main line from filling machines.</p>
                            <img src="{{ URL::asset('images/industrial/teabag-2a.png') }}" alt=""/>
                        </li>
                        <li>
                            <h4>Complete Electrical & Pneumatic Control System  </h4>
                            <p>MODU System delivers a complete Electrical & Pneumatic Control System that is vital to control the empty and filled tea bag boxes to ensure their flawless movement between processes. Our range of supply comprises of pneumatics control and an integrated control panel with touch screen interface which places control of entire system on your fingertips.</p>
                            <img src="{{ URL::asset('images/industrial/teabag-3a.png') }}" alt=""/>
                        </li>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-1.jpg') }}" href="{{ URL::asset('images/industrial/teabag-1.jpg') }}" data-lightbox-animation="fadeIn">
                                            <img src="{{ URL::asset('images/industrial/teabag-1.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-2.jpg') }}" href="{{ URL::asset('images/industrial/teabag-2.jpg') }}" data-lightbox-animation="slideInTop">
                                            <img src="{{ URL::asset('images/industrial/teabag-2.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-3.jpg') }}" href="{{ URL::asset('images/industrial/teabag-3.jpg') }}" data-lightbox-animation="slideInRight">
                                            <img src="{{ URL::asset('images/industrial/teabag-3.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-4.jpg') }}" href="{{ URL::asset('images/industrial/teabag-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                            <img src="{{ URL::asset('images/industrial/teabag-4.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-5.jpg') }}" href="{{ URL::asset('images/industrial/teabag-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/teabag-5.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-6.jpg') }}" href="{{ URL::asset('images/industrial/teabag-6.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/teabag-6.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-7.jpg') }}" href="{{ URL::asset('images/industrial/teabag-7.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/teabag-7.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-8.jpg') }}" href="{{ URL::asset('images/industrial/teabag-8.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/teabag-8.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/teabag-9.jpg') }}" href="{{ URL::asset('images/industrial/teabag-9.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/teabag-9.jpg') }}" alt="" style="height:200px;"/>
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
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Download Leaflet</h3>
                    <a href="{{route('download', ['filename' => 'Tea Bag Handling.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                        <span class="icon-download"></span> Tea Bag Handling
                    </a>
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
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/_BwtmwcqclI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video End -->

@endsection