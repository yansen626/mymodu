@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-9 offset-1 mb-mobile-40 v-align-middle">
                <div>
                    <h3>MODU Plastic Belt Conveyor </h3>
                    <img src="{{ URL::asset('images/article/article-belt-1.jpg') }}" alt=""/>

                    <p>The new modular plastic belt conveyor system from MODU is a simplified solution for conveying large products. All components of the plastic belt conveyor is standardized for easy engineering, maintenance and operation.</p>
                    <p>Simplicity in its design makes MODU’s new plastic belt conveyor reliable, flexible, safe and adaptive to any requirements.  The white POM belt surface is flat and smooth which minimizes the risk of scratches on products, allowing safe handling of sensitive products</p>
                    <p>Plastic belt conveyor systems are designed to integrate with new and existing production equipment. Machinery that has been laid out to fulfill factory and operator requirement can easily be linked using suitable components and conveyors from our modular range.</p>

                    <img src="{{ URL::asset('images/article/article-belt-2.jpg') }}" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video -->
    <div class="section-block pt-80 pb-0">
        <div class="row">
            <div class="column width-10 offset-1 center">
                <h3 class="mb-50">Video</h3>
                <div class="video-container">
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/IRuB92XqQe0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- YouTube Video End -->
@endsection