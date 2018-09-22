@extends('layouts.frontend')

@section('body-content')
    <div class="section-block pb-0 bkg-white">
        <div class="row flex">
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                    <h2>Catalogue Download </h2>
                    <p>If you are looking for spare parts, ordering information, or technical data, you can find it in the download section. If you do not find what you are looking for, please contact your local MODU sales office.</p>


                    <div class="row flex">
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU Product Brochure.png') }}" alt=""/>
                                    <p></p>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'Brochure 2017.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU Product Brochure
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU Catalogue V17.0.jpg') }}" alt=""/>
                                    <p></p>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'Catalogue V17-161207-small.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU Catalogue V17.0
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU Application Photos.jpg') }}" alt=""/>
                                    <p></p>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'AP V17.0-small.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU Application Photos
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU TR Technical Reference.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'TR V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU TR Technical Reference
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MS2 (63mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MS2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MS2 (63mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MM3 (83mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MM3 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MM3 (83mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU ML2 (140mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'ML2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU ML2 (140mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MX2 (220mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MX2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MX2 (220mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MT2 (315mm) Plastic Belt Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MT2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MT2 (315mm) Plastic Belt Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MR2 (435mm) Plastic Belt Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MR2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MR2 (435mm) Plastic Belt Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MF2 (585mm) Plastic Belt Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MF2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MF2 (585mm) Plastic Belt Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MG Conveyor Guides.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MG V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MG Conveyor Guides
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MB Structural System.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MB V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MB Structural System
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU MA Conveyor Accessories.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'MA V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU MA Conveyor Accessories
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU Installation Manual.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'Installation Manual.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU Installation Manual
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU Maintenance Manual.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'Maintenance Manual.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU Maintenance Manual
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU Tools.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'TL V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU Tools
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column width-12 mb-mobile-40 v-align-middle">
                <div>
                        <h2>Stainless Steel Conveyor System </h2>

                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DS2 (63mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DS2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DS2 (63mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DM3 (83mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DM3 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DM3 (83mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DL2 (140mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DL2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DL2 (140mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DX2 (220mm) Plastic Chain Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DX2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DX2 (220mm) Plastic Chain Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DG Conveyor Guides.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DG V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DG Conveyor Guides
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DB Structural System.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DB V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DB Structural System
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DA Conveyor Accessories.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DA V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DA Conveyor Accessories
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DT2 (315mm) Plastic Belt Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DT2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DT2 (315mm) Plastic Belt Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DR2 (435mm) Plastic Belt Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DR2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DR2 (435mm) Plastic Belt Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-3 v-align-middle">
                            <div class="box rounded xlarge bkg-grey-light">
                                <div>
                                    <img src="{{ URL::asset('images/download-images/MODU DF2 (585mm) Plastic Belt Conveyor.jpg') }}" alt=""/>
                                    <p></p>
                                    <a href="{{route('download', ['filename' => 'DF2 V17.0.pdf'])}}" class="button medium rounded bkg-theme bkg-hover-theme color-white color-hover-white">
                                        <span class="icon-download"></span> MODU DF2 (585mm) Plastic Belt Conveyor
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection