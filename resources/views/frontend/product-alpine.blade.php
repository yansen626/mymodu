@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h2>Alpine Conveyor</h2>
                    <p>The alpine conveyor acts as a buffer between different machines. It can also be utilized as an aid between the processes for elevating or lowering the products, drying or cooling.</p>

                    <!-- Portfolio Grid -->
                    <div class="grid-container fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1" data-animate-resize data-animate-resize-duration="0">
                        <div class="row">
                            <div class="column width-12">
                                <div class="row grid content-grid-4">
                                    <div class="grid-item grid-sizer identity photography">
                                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                            <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/product/alp01-bb95916ae3.jpg') }}" href="{{ URL::asset('images/product/alp01-bb95916ae3.jpg') }}" data-lightbox-animation="fadeIn">
                                                <img src="{{ URL::asset('images/product/alp01-bb95916ae3.jpg') }}" alt="" style="height: 150px;"/>
                                                <span class="overlay-info center">
                                                    <span>
                                                        <span>
                                                            <span class="icon-magnifying-glass"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid-item design photography">
                                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                            <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/product/alp02-b0af12cd66.jpg') }}" href="{{ URL::asset('images/product/alp02-b0af12cd66.jpg') }}" data-lightbox-animation="slideInTop">
                                                <img src="{{ URL::asset('images/product/alp02-b0af12cd66.jpg') }}" alt="" style="height: 150px;"/>
                                                <span class="overlay-info center">
                                                    <span>
                                                        <span>
                                                            <span class="icon-magnifying-glass"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid-item design identity">
                                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                            <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/product/alp03-ea9ee77eff.jpg') }}" href="{{ URL::asset('images/product/alp03-ea9ee77eff.jpg') }}" data-lightbox-animation="slideInRight">
                                                <img src="{{ URL::asset('images/product/alp03-ea9ee77eff.jpg') }}" alt="" style="height: 150px;"/>
                                                <span class="overlay-info center">
                                                    <span>
                                                        <span>
                                                            <span class="icon-magnifying-glass"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid-item design identity">
                                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                            <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/product/alp04-8d3c2c3a8e.jpg') }}" href="{{ URL::asset('images/product/alp04-8d3c2c3a8e.jpg') }}" data-lightbox-animation="slideInBottom">
                                                <img src="{{ URL::asset('images/product/alp04-8d3c2c3a8e.jpg') }}" alt="" style="height: 150px;"/>
                                                <span class="overlay-info center">
                                                    <span>
                                                        <span>
                                                            <span class="icon-magnifying-glass"></span>
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

                    <br/>
                    <p>Please consult MODU representative for more information.</p>
                </div>
            </div>
        </div>
    </div>
@endsection