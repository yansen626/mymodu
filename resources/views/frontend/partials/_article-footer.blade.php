
    @if($footer == "aluminium"))
        <div class="row flex">
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/aluminium-63mm-thumb.png') }}" alt=""/>
                        <h4>63mm Chain Width</h4>
                        <p>63mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'M63'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/aluminium-83mm-thumb.png') }}" alt=""/>
                        <h4>83mm Chain Width</h4>
                        <p>83mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'M83'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/aluminium-140mm-thumb.png') }}" alt=""/>
                        <h4>140mm Chain Width</h4>
                        <p>140mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'M140'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/aluminium-220mm-thumb.png') }}" alt=""/>
                        <h4>220mm Chain Width</h4>
                        <p>220mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'M220'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-12 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/MT2.jpg') }}" alt=""/>
                        <img src="{{ URL::asset('images/article/MR2.jpg') }}" alt=""/>
                        <img src="{{ URL::asset('images/article/MF2.jpg') }}" alt=""/>
                        <a href="{{route ('article', ['page'=>'belt'])}}"><h4>Plastic Belt Conveyor Series</h4></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row flex">
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/stainless-63mm-thumb.png') }}" alt=""/>
                        <h4>63mm Chain Width</h4>
                        <p>63mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'D63'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/stainless-83mm-thumb.png') }}" alt=""/>
                        <h4>83mm Chain Width</h4>
                        <p>83mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'D83'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/stainless-140mm-thumb.png') }}" alt=""/>
                        <h4>140mm Chain Width</h4>
                        <p>140mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'D140'])}}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="column width-3 v-align-middle">
                <div class="box rounded xlarge bkg-grey-light">
                    <div>
                        <img src="{{ URL::asset('images/article/stainless-220mm-thumb.png') }}" alt=""/>
                        <h4>220mm Chain Width</h4>
                        <p>220mm Thermoplastic chain with aluminum conveyor. </p>
                        <a href="{{route ('article', ['page'=>'D220'])}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
