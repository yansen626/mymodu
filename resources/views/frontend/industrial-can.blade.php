@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-9 offset-1 mb-mobile-40 v-align-middle">
                <div>
                    <h3>Composite Can Manufacturing Solution</h3>
                    <div class="column width-3">
                        <img src="{{ URL::asset('images/industrial/can.jpg') }}" alt="" style="height:140px;"/>
                    </div>
                    <div class="column width-9">
                        <p>At paper stand, brown paper and silver paper are rolled to convert to core at the winder machine. Then, the tube roll down machine transports the rolls to the PACO machine where the paper rolls are cut to size. The cut cans then undergo other necessary processes. The equipments that MODU supply are Polycoad Conveyor, Uppender, Accumulator, C-Type Gripper and Can Cleaner.</p>
                        <br>
                    </div>

                    <h3>Sample layout of Composite Can Handling</h3>
                    <h3>Equipments Supplied by MODU</h3>

                    <ul style="list-style-image: none;">
                        <li>
                            <h4>Combined Polycord with Upender  </h4>
                            <p>a) Polycord Conveyor</p>
                            <p>It creates gap between cut to length can before it alters orientation at upender. It utilizes combine drive for driving single polycord and twin polycord conveyor with dissimilar speed ratios.</p>
                            <p>b) Upender</p>
                            <p>The purpose of Upender is to modify Can orientation from sleeping to standing position. It also comes with product diameter adjustment for diameters aprox 0 - 150mm. It is driven by two gear motors which are controlled by an inverter.</p>

                            <div class="row flex">
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p1.jpg') }}" alt=""/>
                                            <p>Combined Polycord with Upender.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p2.jpg') }}" alt=""/>
                                            <p>Composite can from polycord conveyor traveling to Upender</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p3.jpg') }}" alt=""/>
                                            <p>Composite can changes orientation at Upender</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h4>Accumulator</h4>
                            <div class="row flex">
                                <div class="column width-6 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p4.jpg') }}" alt=""/>
                                            <p>Complete Accumulator for Composite Can ready for delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-6 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p5.jpg') }}" alt=""/>
                                            <p>Accumulator with product accumulation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h4>Gripper System</h4>
                            <p>Gripper is utilized for moving the products up and down or to put things on a hold between the conveyers or at the finishing stage of the conveyer. Two sets of conveyers are attached in a gripper in order to transport products to higher or lower elevations while taking up minimal floor space. It holds the product in a firm but gentle manner before releasing it to another conveyor.</p>

                            <div class="row flex">
                                <div class="column width-6 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p6.jpg') }}" alt=""/>
                                            <p>C-Flow Gripper System</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-6 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p7.jpg') }}" alt=""/>
                                            <p>Product at gripper infeed and outfeed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4>Types of gripper system available:</h4>

                            <div class="row flex">
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-g1.jpg') }}" alt=""/>
                                            <p>Simple Gripper Upender</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-g2.jpg') }}" alt=""/>
                                            <p>Gripper Upender</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-g3.jpg') }}" alt=""/>
                                            <p>S - Flow</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h4>Can Cleaner</h4>
                            <p>One of the applications is MODU Composite Can Cleaner. The main activity of a MODU Composite Can Cleaner is to blow air into a paper can, eliminate dust inside the composite can. It could be attach with fault detector sensor and reject system.</p>

                            <div class="row flex">
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p8.jpg') }}" alt=""/>
                                            <p>Stainless steel rod is use to maintain orientation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p9.jpg') }}" alt=""/>
                                            <p>Product is transported to another machine while being dust blowing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column width-4 v-align-middle">
                                    <div class="box rounded xlarge bkg-grey-light">
                                        <div>
                                            <img src="{{ URL::asset('images/industrial/can-p10.jpg') }}" alt=""/>
                                            <p>Completed Composite Can Cleaner ready for delivery.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/can-1.jpg') }}" href="{{ URL::asset('images/industrial/can-1.jpg') }}" data-lightbox-animation="fadeIn">
                                            <img src="{{ URL::asset('images/industrial/can-1.jpg') }}" alt="" style="height:200px;"/>
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
                                        <a class="overlay-link lightbox-link" data-group="project-1" data-image-url="{{ URL::asset('images/industrial/can-2.jpg') }}" href="{{ URL::asset('images/industrial/can-2.jpg') }}" data-lightbox-animation="slideInTop">
                                            <img src="{{ URL::asset('images/industrial/can-2.jpg') }}" alt="" style="height:200px;"/>
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

    <!-- YouTube Video -->
    <div class="section-block pt-80 pb-0">
        <div class="row">
            <div class="column width-10 offset-1 center">
                <h3 class="mb-50">Examples</h3>
                <div class="video-container">
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/kVorhpK_SIw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video End -->
@endsection