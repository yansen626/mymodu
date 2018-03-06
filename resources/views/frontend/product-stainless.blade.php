@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
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
                    <a href="{{route('download', ['filename' => 'Stainless Steel Conveyor.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                        <span class="icon-download"></span> Stainless Steel Conveyors
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials._article-footer', compact('footer'))
@endsection