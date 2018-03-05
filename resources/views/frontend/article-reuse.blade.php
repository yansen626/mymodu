@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-11 mb-mobile-40 v-align-middle">
                <div>
                    <h3>{{$title}} Plastic Chain Conveyor </h3>
                    <div class="column width-7">
                        <p>MODU MX2 conveyor system is suitable for a wide range of applications.</p>
                        <h4>Examples of application industries</h4>
                        <p>Personal Products, Pharmaceutical & Chemical Industry, Automotive & Machined Parts Industry, Food & Packaging Industry, Electrical & Electronic Industry, Paper Converting Industry, and Optical Industry.</p>
                        <h4>Examples of application industries</h4>
                        <img src="{{ URL::asset('images/article/article-'. $image.'-1.jpg') }}" alt="" width="400"/>
                    </div>
                    <div class="column width-5">
                        <img src="{{ URL::asset('images/article/article-'. $image.'-2.jpg') }}" alt=""/>
                    </div>
                    <div class="column width-12">
                        <h4>Components and spare parts</h4>
                        <p>Individual components are available to create special functions, modify existing ones, or to serve as spare parts.</p>
                        <h4>Technical Documents</h4>
                        <div>
                            <i class="far fa-arrow-alt-circle-down"></i>
                            <a href="{{route('download', ['filename' => ''.$pdfName.' V17.0.pdf'])}}"><span>MODU {{ $title }} Plastic Chain Conveyor</span></a>
                        </div>
                        <div>
                            <i class="far fa-arrow-alt-circle-down"></i>
                            <a href="{{route('download', ['filename' => 'MG V17.0.pdf'])}}"><span>MODU MG Conveyor Guides</span></a>
                        </div>
                        <div>
                            <i class="far fa-arrow-alt-circle-down"></i>
                            <a href="{{route('download', ['filename' => 'MB V17.0.pdf'])}}"><span>MODU MB Structural System</span></a>
                        </div>
                        <div>
                            <i class="far fa-arrow-alt-circle-down"></i>
                            <a href="{{route('download', ['filename' => 'MA V17.0.pdf'])}}"><span>MODU MA Conveyor Accessories</span></a>
                        </div>
                        <div>
                            <i class="far fa-arrow-alt-circle-down"></i>
                            <a href="{{route('download', ['filename' => 'TR V17.0.pdf'])}}"><span>MODU TR Technical Reference</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection