
<!-- Header -->
<header class="header header-relative header-fixed-on-mobile nav-dark" data-bkg-threshold="100" data-sticky-threshold="0">
    <div class="header-inner" style="background-color: #0066b2!important;">
        <div class="row nav-bar">
            <div class="column width-12 nav-bar-inner">
                <div class="logo">
                    <div class="logo-inner">
                        <a href="{{route ('landing')}}"><img src="{{ URL::asset('images/MODULogo.png') }}" alt="Modu System Logo" /></a>
                        <a href="{{route ('landing')}}"><img src="{{ URL::asset('images/MODULogo.png') }}" alt="Modu System Logo" /></a>
                    </div>
                </div>
                <nav class="navigation nav-block secondary-navigation nav-right">
                    <ul>
                        <li class="aux-navigation hide">
                            <!-- Aux Navigation -->
                            <a href="#" class="navigation-show side-nav-show nav-icon">
                                <span class="icon-menu"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="navigation nav-block primary-navigation nav-right sub-menu-indicator">
                    <ul>
                        <li>
                            <a href="{{ route('landing') }}">Home</a>
                        </li>
                        <li class="contains-sub-menu">
                            <a href="#">About MODU</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('about-us-facts') }}">Facts</a>
                                </li>
                                <li>
                                    <a href="{{ route('our-customers') }}">Our Customer</a>
                                </li>
                                <li>
                                    <a href="{{ route('about-us-location') }}">MODU in the world</a>
                                </li>
                            </ul>
                        </li>
                        <li class="contains-sub-menu">
                            <a href="#">Our Product</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route ('products', ['products'=>'aluminium'])}}">Aluminium Conveyors</a>
                                </li>
                                <li>
                                    <a href="{{route ('products', ['products'=>'stainless'])}}">Stainless Steel Conveyors</a>
                                </li>
                                <li>
                                    <a href="{{route ('products', ['products'=>'gripper'])}}">Gripper Conveyor</a>
                                </li>
                                <li>
                                    <a href="{{route ('products', ['products'=>'alpine'])}}">Alpine Conveyor</a>
                                </li>
                                <li>
                                    <a href="{{route ('products', ['products'=>'accumulation'])}}">Accumulation Conveyor</a>
                                </li>
                                <li>
                                    <a href="http://mymodu.com/2017/" target="_blank">Kaiten/Sushi Conveyor</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('industrial-solution') }}">Industrial Solutions</a>
                        </li>
                        <li>
                            <a href="{{ route('downloads') }}">Downloads</a>
                        </li>
                        {{--<li class="contains-mega-sub-menu">--}}
                            {{--<a href="#">Industrial Solutions</a>--}}
                            {{--<ul class="mega-sub-menu">--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-food') }}">Food & Packaging</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-teabag') }}">Tea Bag Handling</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-carton') }}">Carton Handling</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-pharmacy') }}">Personal & Pharmaceutical</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-paper') }}">Paper Converting</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-electric') }}">Electronic & Electrical</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-optical') }}">Optional Handling</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-can') }}">Composite Can Manufacturing</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<ul>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-automotive') }}">Automotive & Machine Parts</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-puck') }}">Puck Handling</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ route('industrial-tobacco') }}">Tobacco Handling</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('videos') }}">Videos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->