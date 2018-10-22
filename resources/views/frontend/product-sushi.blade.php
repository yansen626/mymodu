@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h2>Sushi Conveyor</h2>
                    <p>
                        Simple With Customization.
                    </p>
                    <p>MODU Sushi Conveyor is composed of precision-engineered standard modules. With these modules, as well as our expertise, we can turn what you imagine into a highly efficient aesthetically pleasing Kaiten Sushi restaurant.</p>

                    <div class="row" style="margin-bottom: 2%;">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/sushi-conveyor.jpg') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>Sushi Conveyor</h4>
                            <p>The moving presentation of your snacks on the sushi conveyor will certainly be appreciated by your clients. This trendy design and tailored can suit the needs of your establishment. Your clients can choose what they like. This means that you cut back on serving staff.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%;">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/sushi-maker.jpg') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>Sushi Maker</h4>
                            <p>Spreading rice sheets and rolling sushi by hand is time-consuming and unhygienic. The sushi maker solve these problems for you. It simple to use and can make higher quality sushi, faster and more consistently.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%;">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/aluminium-conveyor.jpg') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>Aluminium Conveyor</h4>
                            <p>MODU System provides seven diverse plastic chain conveyor systems out of which four systems are aluminium based. All conveyor systems can be effortlessly assembled with standard tools.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%;">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/dining-ware.jpg') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>Dining Ware</h4>
                            <p>We produces superior dining ware made of melamine which is odourless and non-toxic. Every product produced is glazed to make it durable to withstand roughest handling possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection