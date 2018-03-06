@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Automotive & Machined Part </h3>
                    <p>The automotive & machined part industry has long product cycles. They require very dependable robust conveyor systems which requires little maintenance.</p>
                    <p>Our customers include the leading car producers and part suppliers. With our global network & efficient logistics, MODU System provides the best automation solutions.</p>
                    <p>Automotive & Machined Part Industry (A&M) successfully handled by MODU System:</p>

                    <div class="column width-3 v-align-middle">
                        <div class="box rounded xlarge">
                            <div>
                                <ul style="list-style-image: none;">
                                    <li>Oil Filters</li>
                                    <li>Bearings</li>
                                    <li>Air Conditioning Compressors</li>
                                    <li>Head & Backlights</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column width-3 v-align-middle">
                        <div class="box rounded xlarge">
                            <div>
                                <ul style="list-style-image: none;">
                                    <li>Door winding sets</li>
                                    <li>Gears</li>
                                    <li>Harddisk casings</li>
                                </ul>
                            </div>
                        </div>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/automotive-1.jpg') }}" href="{{ URL::asset('images/industrial/automotive-1.jpg') }}" data-lightbox-animation="fadeIn">
                                            <img src="{{ URL::asset('images/industrial/automotive-1.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/automotive-2.jpg') }}" href="{{ URL::asset('images/industrial/automotive-2.jpg') }}" data-lightbox-animation="slideInTop">
                                            <img src="{{ URL::asset('images/industrial/automotive-2.jpg') }}" alt="" style="height:200px;"/>
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
@endsection