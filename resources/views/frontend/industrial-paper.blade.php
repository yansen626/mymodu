@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-9 offset-1 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Paper Converting Industry</h3>
                    <div class="column width-3">
                        <img src="{{ URL::asset('images/industrial/paper-pic-1.jpg') }}" alt="" style="height:140px;"/>
                    </div>
                    <div class="column width-9">
                        <p>Paper converting is a process through which paper is used to produce another paper product. For example, paper conversion can be used to produce products e.g. tissues, kitchen towels, toilet rolls, sanitary napkins, diapers and etc. MODU automation contains lanner, diverter, package turner, gripper, multi-flow and spiral conveyor.</p>
                        <br>
                    </div>

                    <h3>Our Specialty  </h3>

                    <ul style="list-style-image: none;">
                        <li>
                            <h4>POM-Kevlar for Chains  </h4>
                            <p>For aptly competing in the paper converting industry, MODU came-up with a new technology in table top chains, which uses POM-Kevlar as material in chain. Using Kevlar material in chain helps in overcoming emerging problems like excessive wear and tear on chain and wear strip, dust, noise and vibration.
                                The amazing material known as Kevlar, with equal amount of weight, is much stronger than steel and is much more lightweight, comfortable to use and flexible. Due to these qualities, Kevlar is being utilized in bullet-resistant vests by police for more than 25 years. Salient aspects of Kevlar entail
                                high resistance to cut, small electrical conductivity, minimal shrinkage due to heat, high tensile strength with very less mass, high degree of robustness, less elongation and structural rigidity, high resistance to chemical reaction, exceptional stability of dimensions, resistant to flame and fire.</p>
                        </li>
                        <li>
                            <h4>Automated side guide adjustment</h4>
                            <p>Automated side guide adjustment can be pre-programmed or shaped with five varied types of configurations according to requirements of manufacturing. The adjustment of different types of configurations normally takes less than a minute time. Moreover, as per requirement, manual settings can also be enacted without
                                disturbing auto configured settings. This system is applicable to both “straight” and “bend” sections.</p>
                            <img src="{{ URL::asset('images/industrial/paper-pic-2.jpg') }}" alt=""/>
                            <img src="{{ URL::asset('images/industrial/paper-pic-3.jpg') }}" alt=""/>
                            <p>Automated side guide installed at straight section. Automated side guide installed at bend section.</p>
                        </li>
                        <li>
                            <h4>Gripper Elevator / Lowerator</h4>

                            <div class="column width-3">
                                <img src="{{ URL::asset('images/industrial/paper-pic-4.jpg') }}" alt=""/>
                            </div>
                            <div class="column width-9">
                                <p>Gripper elevator is a set of machine consists of 2 set of conveyors installed side by side within one support structure to conveyor product to a different or same output height with minimum space consumption. It grips the product firmly but gentle enough thru its course before discharging the product to another conveyor assembly.</p>

                            </div>

                            <h4>Gripper elevator / lowerator advantages:</h4>
                            <p>
                                1. Saving floor space, transportation length and require less transfer.<br>
                                2. Maximize space utilization by creating cooling buffer at ceiling level.<br>
                                3. Integrate able with other application such as blower and ink printing device.<br>
                                4. Flexible to install and match with site arrangement layout.
                            </p>

                        </li>
                        <li>
                            <h4>Nylatron wear strip for bend area</h4>
                            <p>It is a self-lubricate material with excellent frictional properties, greater resistance to wear and exceptional capabilities regarding Pressure-Velocity. In fact this property is five times more than standard cast nylons</p>

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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-1.jpg') }}" href="{{ URL::asset('images/industrial/paper-1.jpg') }}" data-lightbox-animation="fadeIn">
                                            <img src="{{ URL::asset('images/industrial/paper-1.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-2.jpg') }}" href="{{ URL::asset('images/industrial/paper-2.jpg') }}" data-lightbox-animation="slideInTop">
                                            <img src="{{ URL::asset('images/industrial/paper-2.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-3.jpg') }}" href="{{ URL::asset('images/industrial/paper-3.jpg') }}" data-lightbox-animation="slideInRight">
                                            <img src="{{ URL::asset('images/industrial/paper-3.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-4.jpg') }}" href="{{ URL::asset('images/industrial/paper-4.jpg') }}" data-lightbox-animation="slideInBottom">
                                            <img src="{{ URL::asset('images/industrial/paper-4.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-5.jpg') }}" href="{{ URL::asset('images/industrial/paper-5.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/paper-5.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/paper-6.jpg') }}" href="{{ URL::asset('images/industrial/paper-6.jpg') }}" data-lightbox-animation="slideInLeft">
                                            <img src="{{ URL::asset('images/industrial/paper-6.jpg') }}" alt="" style="height:200px;"/>
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
                    <a href="{{route('download', ['filename' => 'Paper Converting.pdf'])}}"><span>Paper Converting</span></a>
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
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/mZUO18eULCI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video End -->
@endsection