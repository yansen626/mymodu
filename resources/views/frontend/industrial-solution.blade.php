@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-11 mb-mobile-40 v-align-middle">
                <div>
                    <h3>A Simple Concept Modular & Flexible</h3>
                    <img class="column width-4" src="{{ URL::asset('images/industrial/optical-pic-1.jpg') }}" alt="" style="width: 270px;"/>
                    <p>MODU System was established based on this concept to meet the ever increasing demand for conveyors that easy to install & reconfigure, high flexible, reliable, having an aesthetic look, easy to transport and yet economical to own</p>
                    <br><br><br>

                    <h3>Flexible Design - Simple Assembly</h3>
                    <div class="column width-8">
                        <p>The conventional conveyor system is normally the belt & roller which is difficult to install & dismantle, expensive to build and maintain, and cannot be reconfigured.</p>
                        <p>MODU conveyors are modular and flexible, which makes tham very cost effective. The straights, supports, and bends are made up of various re-assembled components. Therefore MODU conveyors can be installed or reconfigured (realigned, extended or shortned) within a very short  time-frame easily by using simple tools.</p>
                    </div>
                    <div class="column width-4">
                        <img src="{{ URL::asset('images/industrial/optical-pic-2.jpg') }}" alt=""/>
                    </div>

                    <h3>Environment: Our Dedication</h3>
                    <img class="column width-4" src="{{ URL::asset('images/about-us/environment1.jpg') }}" alt=""/>
                    <p>At MODU system, we are dedicated to bring continuous environmental improvement through our "reduce, reuse, and recycle" programmes. Use od fully recyclable product materials e.g aluminium, POM, ABS etc
                        and systematic coding of our products for easy recovery and recycling is an indication of our commitment to better environment. In addition, our conveyor modular design helps to extend the product life cycle.</p>
                    <br><br>
                    <h3>Flat Pack</h3>
                    <div class="column width-8">
                        <p>The shippng model at MODU System has evolved as an efficient approach for storage and handling of products. This model, together with swift delivery procedure and ready stock enables the company to deliver automation products to global markets like Asia, Europe, America, Australia, and Africa.
                            The efficiency with which we serve our global customers is an endorsement of our technical proficiency and engineering business insight.</p>
                    </div>
                    <div class="column width-4">
                        <img src="{{ URL::asset('images/about-us/pack.png') }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accordions Button Nav -->
    <div class="section-block replicable-content bkg-grey-ultralight">
        <div class="row">
            <div class="column width-12">
                <h3 class="mb-50">Industrial Solution</h3>
                <div class="accordion button-nav rounded" data-toggle-icon data-toggle-multiple>
                    <ul>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-1">Food & Packaging</a>
                            <div id="accordion-3-panel-1">
                                <div class="accordion-content" style="width: 100%;">
                                    <p class="lead mb-20">Food & Packaging Industry.</p>
                                    <p>Food & Packaging products successfully handled by MODU System.</p>


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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/food-1.jpg') }}" href="{{ URL::asset('images/industrial/food-1.jpg') }}" data-lightbox-animation="fadeIn">
                                                                            <img src="{{ URL::asset('images/industrial/food-1.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/food-2.jpg') }}" href="{{ URL::asset('images/industrial/food-2.jpg') }}" data-lightbox-animation="slideInTop">
                                                                            <img src="{{ URL::asset('images/industrial/food-2.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/food-3.jpg') }}" href="{{ URL::asset('images/industrial/food-3.jpg') }}" data-lightbox-animation="slideInRight">
                                                                            <img src="{{ URL::asset('images/industrial/food-3.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/food-4.jpg') }}" href="{{ URL::asset('images/industrial/food-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                                                            <img src="{{ URL::asset('images/industrial/food-4.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/food-5.jpg') }}" href="{{ URL::asset('images/industrial/food-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/food-5.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/food-6.jpg') }}" href="{{ URL::asset('images/industrial/food-6.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/food-6.jpg') }}" alt="" style="height:200px;"/>
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
                                </div>
                            </div>
                        </li>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-2">Tea Bag Handling</a>
                            <div id="accordion-3-panel-2">
                                <div class="accordion-content" style="width: 100%;">
                                    <p class="lead mb-20">Tea Bags Handling Solution.</p>
                                    <p>MODU System provides competent tea bag handling solutions with flexible production flows and high throughput. Our conveyor systems are designed to integrate with both new and existing production equipment. Systems which are available to fulfill factory and operator requirement can easily be linked using suitable elements and conveyors from our modular range.</p>


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
                                </div>
                            </div>
                        </li>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-3">Carton Handling</a>
                            <div id="accordion-3-panel-3">
                                <div class="accordion-content" style="width: 100%;">
                                    <p class="lead mb-20">Carton Handling</p>
                                    <p>MODU conveyors are suitable for handling carton packaging. At MODU, we focus on the best available techniques to competently transfer cartons to various processes.</p>
                                </div>
                            </div>
                        </li>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-4">Paper Converting</a>
                            <div id="accordion-3-panel-4">
                                <div class="accordion-content" style="width: 100%;">
                                    <p class="lead mb-20">Paper Converting Industry</p>
                                    <p>Paper converting is a process through which paper is used to produce another paper product. For example, paper conversion can be used to produce products e.g. tissues, kitchen towels, toilet rolls, sanitary napkins, diapers and etc. MODU automation contains lanner, diverter, package turner, gripper, multi-flow and spiral conveyor.</p>

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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-1.jpg') }}" href="{{ URL::asset('images/industrial/paper-1.jpg') }}" data-lightbox-animation="fadeIn">
                                                                            <img src="{{ URL::asset('images/industrial/paper-1.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-2.jpg') }}" href="{{ URL::asset('images/industrial/paper-2.jpg') }}" data-lightbox-animation="slideInTop">
                                                                            <img src="{{ URL::asset('images/industrial/paper-2.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-3.jpg') }}" href="{{ URL::asset('images/industrial/paper-3.jpg') }}" data-lightbox-animation="slideInRight">
                                                                            <img src="{{ URL::asset('images/industrial/paper-3.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-4.jpg') }}" href="{{ URL::asset('images/industrial/paper-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                                                            <img src="{{ URL::asset('images/industrial/paper-4.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-5.jpg') }}" href="{{ URL::asset('images/industrial/paper-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/paper-5.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-6.jpg') }}" href="{{ URL::asset('images/industrial/paper-6.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/paper-6.jpg') }}" alt="" style="height:200px;"/>
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
                                </div>
                            </div>
                        </li>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-5">Optical Handling</a>
                            <div id="accordion-3-panel-5">
                                <div class="accordion-content" style="width: 100%;">
                                    <p class="lead mb-20">Optical Handling Industry</p>
                                    <p>MODU conveyors can aptly handle standard lens trays that are mandatory in ophthalmic industry.</p>
                                    <p>At MODU, the focus is on utilizing best techniques to promptly transport lenses around the factory. We are committed in designing a conveyor system which will ensure each machine, from generating, polishing, centering, marking and blocking, is constantly supplied with product to reduce the idle time of machines to the minimum.</p>
                                    <p>We have a rich experience in distributing world’s leading machines from companies like Automation & Robotics (A&R), Schneider Gmbh, Satisloh and Nidek.</p>
                                    <p>We are expert in designing and installing systems for small lens manufacturers up to giant companies like Specsavers and Nikon Optical. Our systems are developed with standard modules including Stop Gates, Lane Diverters, Side Tray Pushers, Tray Turners and Vertical Lifters.</p>

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
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
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
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
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
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
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
                                                        <span class="icon-magnifying-glass" style="font-size: 3em;"></span>
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
                                </div>
                            </div>
                        </li>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-6">Composite Can Manufacturing</a>
                            <div id="accordion-3-panel-6">
                                <div class="accordion-content">
                                    <p class="lead mb-20">Composite Can Manufacturing Solution</p>
                                    <p>At paper stand, brown paper and silver paper are rolled to convert to core at the winder machine. Then, the tube roll down machine transports the rolls to the PACO machine where the paper rolls are cut to size. The cut cans then undergo other necessary processes. The equipments that MODU supply are Polycoad Conveyor, Uppender, Accumulator, C-Type Gripper and Can Cleaner.</p>

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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/can-1.jpg') }}" href="{{ URL::asset('images/industrial/can-1.jpg') }}" data-lightbox-animation="fadeIn">
                                                                            <img src="{{ URL::asset('images/industrial/can-1.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/can-2.jpg') }}" href="{{ URL::asset('images/industrial/can-2.jpg') }}" data-lightbox-animation="slideInTop">
                                                                            <img src="{{ URL::asset('images/industrial/can-2.jpg') }}" alt="" style="height:200px;"/>
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
                                </div>
                            </div>
                        </li>
                        <li style="width: 100%;">
                            <a href="#accordion-3-panel-7">Puck Handling</a>
                            <div id="accordion-3-panel-7">
                                <div class="accordion-content">
                                    <p class="lead mb-20">Puck Handling</p>
                                    <p>MODU conveyors are appropriate for all kinds of puck designs. At MODU, we rely on the best techniques to proficiently carry pucks to distinct production lines.</p>

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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-1.jpg') }}" href="{{ URL::asset('images/industrial/puck-1.jpg') }}" data-lightbox-animation="fadeIn">
                                                                            <img src="{{ URL::asset('images/industrial/puck-1.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-2.jpg') }}" href="{{ URL::asset('images/industrial/puck-2.jpg') }}" data-lightbox-animation="slideInTop">
                                                                            <img src="{{ URL::asset('images/industrial/puck-2.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-3.jpg') }}" href="{{ URL::asset('images/industrial/puck-3.jpg') }}" data-lightbox-animation="slideInRight">
                                                                            <img src="{{ URL::asset('images/industrial/puck-3.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-4.jpg') }}" href="{{ URL::asset('images/industrial/puck-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                                                            <img src="{{ URL::asset('images/industrial/puck-4.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-5.jpg') }}" href="{{ URL::asset('images/industrial/puck-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/puck-5.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-6.jpg') }}" href="{{ URL::asset('images/industrial/puck-6.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/puck-6.jpg') }}" alt="" style="height:200px;"/>
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
                                                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/puck-7.jpg') }}" href="{{ URL::asset('images/industrial/puck-7.jpg') }}" data-lightbox-animation="slideInLeft">
                                                                            <img src="{{ URL::asset('images/industrial/puck-7.jpg') }}" alt="" style="height:200px;"/>
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
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Accordions Button Nav End -->


@endsection