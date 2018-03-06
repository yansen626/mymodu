@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-9 offset-1 mb-mobile-40 v-align-middle">
                <div>
                    <h2>Stainless Steel Conveyors</h2>
                    <p><img src="{{ URL::asset('images/product/suscv.jpg') }}" alt="" style="float: right;" width="500" height="375"/></p>
                    <p>
                        MODU System’s stainless steel conveyor system comprises of two distinct DS2 and DL2 streamlines assembly and installation time, which allows rapid and relaxed line modifications. MODU stainless steel conveyors can function easily at high speeds without lubrication.
                    </p>
                    <p>Our Conveyor’s modular design comprehends trouble-free line configurations, site installation and maintenance making them cost effective and simple to use.</p>
                    <p>MODU conveyors can be reconfigured or assembled in quite a less time using simple hand held tools.</p>
                    <h4>Efficient Design</h4>
                    <p>MODU stainless steel conveyors are designed to ensure their suitability for hygiene industry. The advanced drainage, open design and abolished pockets in conveyor design ensure a more hygienic conveyor.</p>

                    <h4>Download Leaflet</h4>
                    <a href="/download/Stainless Steel Conveyor.pdf" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">Stainless Steel Conveyors</a>
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
														<i class="fas fa-search fa-3x"></i>
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
@endsection