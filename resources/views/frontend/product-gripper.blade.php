@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h2>Gripper System</h2>
                    <p><img src="{{ URL::asset('images/product/Gripper-1.jpg') }}" alt="" style="float: left; margin-right: 10px;" width="200" height="156"/></p>
                    <p>
                        Gripper is utilized for moving the products up and down or to put things on a hold between the conveyers or at the finishing stage of the conveyer. Two sets of conveyers are attached in a gripper in order to transport products to higher or lower elevations while taking up minimal floor space. It holds the product in a firm but gentle manner before releasing it to another conveyor.
                    </p>
                    <h4>Advantages of gripper conveyors</h4>
                    <ul>
                        <li>Saves floor space, reduces conveyance length and entails fewer transfers</li>
                        <li>Creates cooling holding area at ceiling thus maximizing space utilization.</li>
                        <li>Can be integrated with other devices e.g. blower and ink printing machine.</li>
                        <li>Easy to install and compliments site arrangement layout.</li>
                    </ul>

                    <h4>Types of Gripper Conveyor</h4>
                    <p>There are four major types of gripper conveyors presented to suit customer’s need.</p>

                    <div class="column width-12">
                        <div class="row flex boxes content-grid-4">
                            <div class="grid-item center">
                                <div class="box rounded medium mb-0 border-grey-light horizon" data-animate-in="preset:slideInUpShort;duration:300ms;" data-threshold="0.3">
                                    <div style="margin-bottom: 2rem;">
                                        <img src="{{ URL::asset('images/product/c-type.png') }}" height="150" alt=""/>
                                    </div>
                                    <div class="team-content-info">
                                        <h4 class="mb-10">C-Flow</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item center">
                                <div class="box rounded medium mb-0 border-grey-light horizon" data-animate-in="preset:slideInUpShort;duration:300ms;delay:100ms;" data-threshold="0.3">
                                    <div style="margin-bottom: 8rem;">
                                        <img src="{{ URL::asset('images/product/s-type.png') }}" height="150" alt=""/>
                                    </div>
                                    <div class="team-content-info">
                                        <h4 class="mb-10">S-Flow</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item center">
                                <div class="box rounded medium mb-0 border-grey-light horizon" data-animate-in="preset:slideInUpShort;duration:300ms;delay:200ms;" data-threshold="0.3">
                                    <div style="margin-bottom: 2rem;">
                                        <img src="{{ URL::asset('images/product/LH.png') }}" height="150" alt=""/>
                                    </div>
                                    <div class="team-content-info">
                                        <h4 class="mb-10">Simple Gripper Upender</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item center">
                                <div class="box rounded medium mb-0 border-grey-light horizon" data-animate-in="preset:slideInUpShort;duration:300ms;delay:200ms;" data-threshold="0.3">
                                    <div style="margin-bottom: 17rem;">
                                        <img src="{{ URL::asset('images/product/upender.png') }}" height="150" alt=""/>
                                    </div>
                                    <div class="team-content-info">
                                        <h4 class="mb-10">Gripper Upender</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/gripper-product.jpg') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>1. Product Elevation</h4>
                            <p>Gripper conveyers picks up items from an in-feed conveyor, transports them to a higher or lower level elevation, and releases them for a discharge conveyor. The discharge end is utilized for placing the drives. Gripper conveyor is ideal for palletizing, filling, packing, buffering, blowing, etc.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/upender.png') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>2. Change Orientation</h4>
                            <p>Gripper upended design alters the product placement by 90º. Gripper conveyer collect items from an in-feed conveyor, transports them to a higher or lower level elevation, and releases them for a discharge conveyor. The discharge end is utilized for placing the drives.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/De-Puck.png') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>3. Product De-Puck</h4>
                            <p>A basic de-pucking system could be realized by installing a short gripper conveyor on top of plain chain conveyor. The bottles that have been already filled are detached from puck when entering gripper conveyor and transferred to another conveyor for capping process while the puck is returned to the initial point in order to fill empty bottles.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/c-type with infeed.png') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>4. Product Reverting</h4>
                            <p>Lifts items from an in-feed conveyor, inverts product orientation, and releases them on to a discharge conveyor. The discharge end is utilized for placing the drives. Prior to entering filling machine, Product reverting conveyor is utilized for cleaning and drying.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/cross over - 1.png') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>5. Creating Passage Way</h4>
                            <p>Lifts items from a horizontal in-feed conveyor, transports the product above a reasonable height at a short distance, then lowers and levels out to release them to a horizontal discharge conveyor, allowing enough access for the operator or fork lifter from each side.</p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2rem;">
                        <div class="column width-2">
                            <img src="{{ URL::asset('images/product/inverter air riser.png') }}" style="height: 150px;"/>
                        </div>
                        <div class="column width-10">
                            <h4>6. Inverter Air Rinser</h4>
                            <p>Lifts products from a horizontal in-feed conveyor, topples them at an angle of 180º, transports them through an air cleaning or air cleaning/ionizing sector (or any other category of specific process or equipment as defined by the customer), topples them back to their original angle and releases them to horizontal discharge conveyor.</p>
                        </div>
                    </div>

                    <h4>Download Leaflet</h4>
                    <a href="{{route('download', ['filename' => 'Griper System.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                        <span class="icon-download"></span> Gripper Conveyors
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection