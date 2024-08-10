
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@section('content')
{{--<div class="bg-gray-13 bg-md-transparent">--}}
{{--    <div class="container">--}}
{{--        <!-- breadcrumb -->--}}
{{--        <div class="my-md-3">--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">--}}
{{--                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>--}}
{{--                    <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Smart Phones & Tablets</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--        <!-- End breadcrumb -->--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End breadcrumb -->

<div class="container">
    <div class="row mb-8">
        <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
            <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                <!-- List -->
                <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
                    <li>
                        <a class="dropdown-toggle dropdown-toggle-collapse dropdown-title" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                            Show All Categories
                        </a>

                        <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                            <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                                <!-- Menu List -->
                                @foreach(product_categories() as $category)

                                    <li><a class="dropdown-item" href="{{route('product.category',$category->id)}}"><strong>{{$category->name}}</strong></a></li>

                                @endforeach
                                <!-- End Menu List -->
                            </ul>
                        </div>
                    </li>
{{--                    <li>--}}
{{--                        <a class="dropdown-current active" href="#">Smart Phones & Tablets <span class="text-gray-25 font-size-12 font-weight-normal"> (50)</span></a>--}}

{{--                    </li>--}}
                </ul>
                <!-- End List -->
            </div>

        </div>
        <div class="col-xl-9 col-wd-9gdot5">

            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($products as $product)
                            <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
{{--                                            <div class="mb-2"><a href="{{route('product.details',$product->slug)}}" class="font-size-12 text-gray-5">Speakers</a></div>--}}
                                            <h5 class="mb-1 product-item__title"><a href="{{route('product.details',$product->slug)}}" class="text-blue font-weight-bold">{{$product->name}}</a></h5>
                                            <div class="mb-2">
                                                <a href="{{route('product.details',$product->slug)}}" class="d-block text-center">

                                                    <img class="img-fluid" src="{{url(product_image($product))}}" alt="Image Description" style="height: 100px"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">{{currency_code()}} {{formatPrice($product->max_price)}}</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{route('product.details',$product->slug)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
{{--                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>--}}
{{--                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach



                    </ul>
                </div>


            </div>
            <!-- End Tab Content -->
            <!-- End Shop Body -->
            <!-- Shop Pagination -->
            <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
                <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
                <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                    <li class="page-item"><a class="page-link current" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
            <!-- End Shop Pagination -->
        </div>
    </div>
    <!-- Brand Carousel -->
{{--    <div class="mb-6">--}}
{{--        <div class="py-2 border-top border-bottom">--}}
{{--            <div class="js-slick-carousel u-slick my-1"--}}
{{--                 data-slides-show="5"--}}
{{--                 data-slides-scroll="1"--}}
{{--                 data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"--}}
{{--                 data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"--}}
{{--                 data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"--}}
{{--                 data-responsive='[{--}}
{{--                                "breakpoint": 992,--}}
{{--                                "settings": {--}}
{{--                                    "slidesToShow": 2--}}
{{--                                }--}}
{{--                            }, {--}}
{{--                                "breakpoint": 768,--}}
{{--                                "settings": {--}}
{{--                                    "slidesToShow": 1--}}
{{--                                }--}}
{{--                            }, {--}}
{{--                                "breakpoint": 554,--}}
{{--                                "settings": {--}}
{{--                                    "slidesToShow": 1--}}
{{--                                }--}}
{{--                            }]'>--}}
{{--                <div class="js-slide">--}}
{{--                    <a href="#" class="link-hover__brand">--}}
{{--                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png" alt="Image Description">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="js-slide">--}}
{{--                    <a href="#" class="link-hover__brand">--}}
{{--                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png" alt="Image Description">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="js-slide">--}}
{{--                    <a href="#" class="link-hover__brand">--}}
{{--                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png" alt="Image Description">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="js-slide">--}}
{{--                    <a href="#" class="link-hover__brand">--}}
{{--                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png" alt="Image Description">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="js-slide">--}}
{{--                    <a href="#" class="link-hover__brand">--}}
{{--                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png" alt="Image Description">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="js-slide">--}}
{{--                    <a href="#" class="link-hover__brand">--}}
{{--                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png" alt="Image Description">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Brand Carousel -->
</div>


@endsection
