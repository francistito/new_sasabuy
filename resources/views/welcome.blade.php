
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@section('content')


    @include('frontend.includes.home_section.sliders')

    <!-- End Slider Section -->
    <div class="container">
        <!-- Banner -->
        @include('frontend.includes.home_section.banner')

        <!-- End Banner -->
        <!-- Deals-and-tabs -->
        <div class="mb-5">
            <div class="row">
                <!-- Deal -->

                <!-- End Deal -->
                <!-- Tab Prodcut -->
                <div class="col">
                    <!-- Features Section -->
                    <div class="">
                        <!-- Nav Classic -->
                        <div class="position-relative bg-white text-center z-index-2">
                            <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            ALL PRODUCTS
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- End Nav Classic -->

                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                            @include('frontend.includes.home_section.tabs.tab1')
                            {{--                            @include('frontend.includes.home_section.tabs.tab2')--}}
                            {{--                            @include('frontend.includes.home_section.tabs.tab3')--}}
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Features Section -->
                </div>
                <!-- End Tab Prodcut -->
            </div>
        </div>
        <!-- End Deals-and-tabs -->
    </div>

    <div class="container">

        <!-- Full banner -->
        @include('frontend.includes.home_section.middle_banner')
        <!-- End Full banner -->
        <!-- Recently viewed -->
        @include('frontend.includes.home_section.reviewed_product')
        <!-- End Recently viewed -->
        <!-- Brand Carousel -->
        @include('frontend.includes.home_section.list_of_brands')
        <!-- End Brand Carousel -->
    </div>

@endsection
