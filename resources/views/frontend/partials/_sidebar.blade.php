
<!-- Side Navigation Menu -->
<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
    <div class="side-navigation-scroll-pane">
        <div class="side-navigation-inner">
            <div class="side-navigation-header">
                <div class="navigation-hide side-nav-hide">
                    <a href="#">
                        <span class="icon-cancel medium"></span>
                    </a>
                </div>
            </div>
            <nav class="side-navigation nav-block">
                <ul>
                    <li>
                        <a href="#" class="contains-sub-menu">About MODU</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us-facts') }}">Facts</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us-location') }}">MODU in the world</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="contains-sub-menu">Our Product</a>
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
                        <a href="#" class="contains-sub-menu">Industrial Solutions</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('industrial-food') }}">Food & Packaging</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-teabag') }}">Tea Bag Handling</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-carton') }}">Carton Handling</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-pharmacy') }}">Personal & Pharmaceutical</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-paper') }}">Paper Converting</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-electric') }}">Electronic & Electrical</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-optical') }}">Optional Handling</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-can') }}">Composite Can Manufacturing</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-automotive') }}">Automotive & Machine Parts</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-puck') }}">Puck Handling</a>
                            </li>
                            <li>
                                <a href="{{ route('industrial-tobacco') }}">Tobacco Handling</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{ route('videos') }}">Videos</a>
                    </li>
                </ul>
            </nav>
            <div class="side-navigation-footer">
                <p class="copyright no-margin-bottom"> Copyright &copy; 1995 - 2018 MODU System.</p>
            </div>
        </div>
    </div>
</aside>
<!-- Side Navigation Menu End -->