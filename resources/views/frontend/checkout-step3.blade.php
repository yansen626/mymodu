@extends('layouts.frontend')

@section('body-content')

    <!-- BREADCRUMBS -->
    <section class="breadcrumb parallax margbot30"></section>
    <!-- //BREADCRUMBS -->


    <!-- PAGE HEADER -->
    <section class="page_header">

        <!-- CONTAINER -->
        <div class="container border0 margbot0">
            <h3 class="pull-left"><b>Checkout</b></h3>

            <div class="pull-right">
                <a href="{{ route('cart-list') }}" >Back shopping bag<i class="fa fa-angle-right"></i></a>
            </div>
        </div><!-- //CONTAINER -->
    </section><!-- //PAGE HEADER -->


    <!-- CHECKOUT PAGE -->
    <section class="checkout_page">

        <!-- CONTAINER -->
        <div class="container">

            <!-- CHECKOUT BLOCK -->
            <div class="checkout_block">
                <ul class="checkout_nav">
                    <li class="done_step2">1. Shipping Address</li>
                    <li class="done_step2">2. Delivery</li>
                    <li class="done_step">3. Confirm Order</li>
                    <li class="active_step last">4. Payment</li>
                </ul>
            </div><!-- //CHECKOUT BLOCK -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-9 col-md-9 padbot60">
                    <div class="checkout_confirm_orded clearfix">
                        <div class="checkout_confirm_orded_bordright clearfix">
                            <div class="billing_information">
                                <p class="checkout_title margbot10">Billing information</p>

                                <div class="billing_information_content margbot40">
                                    <span>{{$userData->first_name}} {{$userData->last_name}}</span>
                                    <span>{{$userData->phone}}</span>
                                    <span>{{$userData->email}}</span>
                                </div>

                                <p class="checkout_title margbot10">Shipping adress</p>

                                <div class="billing_information_content margbot40">
                                    <span>{{$userAddress->name}}</span>
                                    <span>{{$userData->phone}}</span>
                                    <span>{{$userAddress->detail}}</span>
                                    <span>{{$userAddress->subdistrict_name}} {{$userAddress->city_name}}</span>
                                    <span>{{$userAddress->province_name}} {{$userAddress->postal_code}}</span>
                                </div>
                            </div>

                            <div class="payment_delivery">
                                <p class="checkout_title margbot10">Payment and delivery</p>

                                <p><span>Courier:</span> {{$carts[0]->courier->description}}  </p>

                                <p><span>Delivery:</span> {{$carts[0]->deliveryType->description}}</p>
                            </div>
                        </div>

                        <div class="checkout_confirm_orded_products">
                            <p class="checkout_title">Products</p>
                            <ul class="cart-items">
                                @foreach($carts as $cart)
                                    <li class="clearfix">
                                        <img class="cart_item_product" src="{{ URL::asset('frontend_images/tovar/women/1.jpg') }}" alt="" />
                                        <a href="{{ route('product-detail', ['id' => $cart->Product->id]) }}" class="cart_item_title">{{$cart->product->name}}</a>
                                        <span class="cart_item_price">Rp {{$cart->product->price}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 padbot60">

                    <!-- BAG TOTALS -->
                    <div class="sidepanel widget_bag_totals your_order_block">
                        <h3>Your Order</h3>
                        <table class="bag_total">
                            <tr class="cart-subtotal clearfix">
                                <th>Sub total</th>
                                <td>Rp {{$totalPrice}}</td>
                            </tr>
                            <tr class="shipping clearfix">
                                <th>SHIPPING</th>
                                <td>Rp {{$shipping}}</td>
                            </tr>
                            <tr class="total clearfix">
                                <th>Total</th>
                                <td>Rp {{$grandTotal}}</td>
                            </tr>
                        </table>
                        <a class="btn active" href="{{ Route('checkout4') }}" >Select Payment</a>
                        <a class="btn inactive" href="{{ route('checkout2') }}" >Back</a>
                    </div><!-- //REGISTRATION FORM -->
                </div><!-- //SIDEBAR -->
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->
    </section><!-- //CHECKOUT PAGE -->
@endsection
