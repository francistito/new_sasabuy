<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title> SASABUY - YOUR LOCAL ADVERTISER</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-electro.css')}}">

    <link rel="stylesheet" href="{{url('assets/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="{{url('assets/css/theme.css')}}">

    <style>
        .sasabuy_text_color{
            color: #ffffff;
        }
        .u-header-topbar__nav-link{
            color: #ffffff;
        }
        .u-header__navbar-nav .u-header__nav-link{
            color: #ffffff;
        }
        .sasabuy_text_color::hover{
            color: #ffffff;
        }

        .text-gray-90 {
            color: #333e48;
        }
    </style>
</head>

<body>
{{--0046BE--}}
<!-- ========== HEADER ========== -->
{{--0046BE--}}


      @include('frontend.includes.new_header')
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Slider Section -->

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
                                            Featured
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            On Sale
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Top Rated
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Nav Classic -->

                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                            @include('frontend.includes.home_section.tabs.tab1')
                            @include('frontend.includes.home_section.tabs.tab2')
                            @include('frontend.includes.home_section.tabs.tab3')
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
        <!-- Prodcut-cards-carousel -->
        <div class="space-top-2">
            <dv class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>
                <ul class="nav nav-pills mb-2 pt-3 pt-md-0 mb-0 border-top border-color-1 border-md-top-0 align-items-center font-size-15 font-size-15-md flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                    <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                        <a class="text-gray-90 btn btn-outline-primary border-width-2 rounded-pill py-1 px-4 font-size-15 text-lh-19 font-size-15-md" href="#">Top 20</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link text-gray-8" href="#">Phones & Tablets</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link text-gray-8" href="#">Laptops & Computers</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                        <a class="nav-link text-gray-8" href="#"> Video Cameras</a>
                    </li>
                </ul>
            </dv>
            <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
                 data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Gadgets</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">External SSD USB 3.1 750 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img8.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Cameras</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple NX Mini F1 aparat  SMART NX</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$559.00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Gadgets</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">External SSD USB 3.1 750 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img8.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Cameras</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple NX Mini F1 aparat  SMART NX</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$559.00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-xl">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Gadgets</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">External SSD USB 3.1 750 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-wd-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0 remove-divider-wd">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="../shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src="assets/img/150X140/img8.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Cameras</a></div>
                                            <h5 class="product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple NX Mini F1 aparat  SMART NX</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$559.00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Prodcut-cards-carousel -->
        <!-- Full banner -->
        <div class="mb-6">
            <a href="../shop/shop.html" class="d-block text-gray-90">
                <div class="" style="background-image: url(assets/img/1400X206/img1.jpg);">
                    <div class="space-top-2-md p-4 pt-6 pt-md-8 pt-lg-6 pt-xl-8 pb-lg-4 px-xl-8 px-lg-6">
                        <div class="flex-horizontal-center mt-lg-3 mt-xl-0 overflow-auto overflow-md-visble">
                            <h1 class="text-lh-38 font-size-32 font-weight-light mb-0 flex-shrink-0 flex-md-shrink-1">SHOP AND <strong>SAVE BIG</strong> ON HOTTEST TABLETS</h1>
                            <div class="ml-5 flex-content-center flex-shrink-0">
                                <div class="bg-primary rounded-lg px-6 py-2">
                                    <em class="font-size-14 font-weight-light">STARTING AT</em>
                                    <div class="font-size-30 font-weight-bold text-lh-1">
                                        <sup class="">$</sup>79<sup class="">99</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Full banner -->
        <!-- Recently viewed -->
        <div class="mb-6">
            <div class="position-relative">
                <div class="border-bottom border-color-1 mb-2">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Recently Viewed</h3>
                </div>
                <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                     data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                     data-slides-show="7"
                     data-slides-scroll="1"
                     data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                     data-arrow-left-classes="fa fa-angle-left right-1"
                     data-arrow-right-classes="fa fa-angle-right right-0"
                     data-responsive='[{
                              "breakpoint": 1400,
                              "settings": {
                                "slidesToShow": 6
                              }
                            }, {
                                "breakpoint": 1200,
                                "settings": {
                                  "slidesToShow": 4
                                }
                            }, {
                              "breakpoint": 992,
                              "settings": {
                                "slidesToShow": 3
                              }
                            }, {
                              "breakpoint": 768,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }, {
                              "breakpoint": 554,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }]'>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-slide products-group">
                        <div class="product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recently viewed -->
        <!-- Brand Carousel -->
        <div class="mb-8">
            <div class="py-2 border-top border-bottom">
                <div class="js-slick-carousel u-slick my-1"
                     data-slides-show="5"
                     data-slides-scroll="1"
                     data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                     data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                     data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                     data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img1.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img2.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img3.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img4.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img5.png" alt="Image Description">
                        </a>
                    </div>
                    <div class="js-slide">
                        <a href="#" class="link-hover__brand">
                            <img class="img-fluid m-auto max-height-50" src="assets/img/200X60/img6.png" alt="Image Description">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Carousel -->
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<footer>
    <!-- Footer-top-widget -->
    <div class="container d-none d-lg-block mb-3">
        <div class="row">
            <div class="col-wd-3 col-lg-4">
                <div class="widget-column">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img1.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$1149.00</div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img2.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$210.00</div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img3.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube Case</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$180.00</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-wd-3 col-lg-4">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                </div>
                <ul class="list-unstyled products-group">
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img4.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img5.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">$899.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img6.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-wd-3 col-lg-4">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                </div>
                <ul class="list-unstyled products-group">
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img7.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$725.00</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img8.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$2999.00</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img9.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$439.00</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-wd-3 d-none d-wd-block">
                <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="assets/img/330X360/img1.jpg" alt="Image Description"></a>
            </div>
        </div>
    </div>
    <!-- End Footer-top-widget -->
    <!-- Footer-newsletter -->
    <div class="bg-primary py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-auto flex-horizontal-center">
                            <i class="ec ec-newsletter font-size-40"></i>
                            <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                        </div>
                        <div class="col my-4 my-md-0">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="js-validate js-form-message">
                        <label class="sr-only" for="subscribeSrEmail">Email address</label>
                        <div class="input-group input-group-pill">
                            <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                   data-msg="Please enter a valid email address.">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-newsletter -->
    <!-- Footer-bottom-widgets -->
    <div class="pt-8 pb-4 bg-gray-13">
        <div class="container mt-1">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-6">
                        <a href="#" class="d-inline-block">
                            <svg version="1.1" x="0px" y="0px" width="156px" height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="mb-4">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <i class="ec ec-support text-primary font-size-56"></i>
                            </div>
                            <div class="col pl-3">
                                <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                <a href="tel:+80080018588" class="font-size-20 text-gray-90">(800) 8001-8588, </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">(0600) 874 548</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-1 font-weight-bold">Contact info</h6>
                        <address class="">
                            17 Princess Road, London, Greater London NW1 8JR, UK
                        </address>
                    </div>
                    <div class="my-4 my-md-4">
                        <ul class="list-inline mb-0 opacity-7">
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                    <span class="fab fa-google btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                    <span class="fab fa-twitter btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                    <span class="fab fa-github btn-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-12 col-md mb-4 mb-md-0">
                            <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Laptops & Computers</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Cameras & Photography</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Smart Phones & Tablets</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Video Games & Consoles</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">TV & Audio</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Gadgets</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Car Electronic & GPS</a></li>
                            </ul>
                            <!-- End List Group -->
                        </div>

                        <div class="col-12 col-md mb-4 mb-md-0">
                            <!-- List Group -->
                            <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Printers & Ink</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Software</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Office Supplies</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Computer Components</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Accesories</a></li>
                            </ul>
                            <!-- End List Group -->
                        </div>

                        <div class="col-12 col-md mb-4 mb-md-0">
                            <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                            <!-- List Group -->
                            <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                <li><a class="list-group-item list-group-item-action" href="../shop/my-account.html">My Account</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/track-your-order.html">Order Tracking</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../shop/wishlist.html">Wish List</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Customer Service</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Returns / Exchange</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../home/faq.html">FAQs</a></li>
                                <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Product Support</a></li>
                            </ul>
                            <!-- End List Group -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-bottom-widgets -->
    <!-- Footer-copy-right -->
    <div class="bg-gray-14 py-2">
        <div class="container">
            <div class="flex-center-between d-block d-md-flex">
                <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Electro</a> - All rights Reserved</div>
                <div class="text-md-right">
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img1.jpg" alt="Image Description">
                            </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img2.jpg" alt="Image Description">
                            </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img3.jpg" alt="Image Description">
                            </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img4.jpg" alt="Image Description">
                            </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img5.jpg" alt="Image Description">
                            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-copy-right -->
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                <!-- Toggle Button -->
                <div class="d-flex align-items-center pt-4 px-7">
                    <button type="button" class="close ml-auto"
                            aria-controls="sidebarContent"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-unfold-event="click"
                            data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent"
                            data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInRight"
                            data-unfold-animation-out="fadeOutRight"
                            data-unfold-duration="500">
                        <i class="ec ec-close-remove"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->

                <!-- Content -->
                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">
                        <form class="js-validate">
                            <!-- Login -->
                            <div id="login" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Welcome Back!</h2>
                                    <p>Login to manage your account.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signinEmail">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                   data-msg="Please enter a valid email address."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signinPassword">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-end mb-4">
                                    <a class="js-animation-link small link-muted" href="javascript:;"
                                       data-target="#forgotPassword"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Forgot Password?</a>
                                </div>

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Do not have an account?</span>
                                    <a class="js-animation-link small text-dark" href="javascript:;"
                                       data-target="#signup"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Signup
                                    </a>
                                </div>

                                <div class="text-center">
                                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                </div>

                                <!-- Login Buttons -->
                                <div class="d-flex">
                                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                        <span class="fab fa-facebook-square mr-1"></span>
                                        Facebook
                                    </a>
                                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                        <span class="fab fa-google mr-1"></span>
                                        Google
                                    </a>
                                </div>
                                <!-- End Login Buttons -->
                            </div>

                            <!-- Signup -->
                            <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Welcome to Electro.</h2>
                                    <p>Fill out the form to get started.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signupEmail">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                   data-msg="Please enter a valid email address."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signupPassword">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                            </div>
                                            <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                   data-msg="Password does not match the confirm password."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Already have an account?</span>
                                    <a class="js-animation-link small text-dark" href="javascript:;"
                                       data-target="#login"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Login
                                    </a>
                                </div>

                                <div class="text-center">
                                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                </div>

                                <!-- Login Buttons -->
                                <div class="d-flex">
                                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                        <span class="fab fa-facebook-square mr-1"></span>
                                        Facebook
                                    </a>
                                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                        <span class="fab fa-google mr-1"></span>
                                        Google
                                    </a>
                                </div>
                                <!-- End Login Buttons -->
                            </div>
                            <!-- End Signup -->

                            <!-- Forgot Password -->
                            <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                <!-- Title -->
                                <header class="text-center mb-7">
                                    <h2 class="h4 mb-0">Recover Password.</h2>
                                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                                </header>
                                <!-- End Title -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <div class="js-form-message js-focus-state">
                                        <label class="sr-only" for="recoverEmail">Your email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                   data-msg="Please enter a valid email address."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <div class="mb-2">
                                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                </div>

                                <div class="text-center mb-4">
                                    <span class="small text-muted">Remember your password?</span>
                                    <a class="js-animation-link small" href="javascript:;"
                                       data-target="#login"
                                       data-link-group="idForm"
                                       data-animation-in="slideInUp">Login
                                    </a>
                                </div>
                            </div>
                            <!-- End Forgot Password -->
                        </form>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </div>
</aside>
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#"
   data-position='{"bottom": 15, "right": 15 }'
   data-type="fixed"
   data-offset-top="400"
   data-compensation="#header"
   data-show-effect="slideInUp"
   data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="{{url('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{url('assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{url('assets/vendor/appear.js')}}"></script>
<script src="{{url('assets/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{url('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{url('assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{url('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{url('assets/vendor/typed.js/lib/typed.min.js')}}"></script>
<script src="{{url('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

<!-- JS Electro -->
<script src="{{url('assets/js/hs.core.js')}}"></script>
<script src="{{url('assets/js/components/hs.countdown.js')}}"></script>
<script src="{{url('assets/js/components/hs.header.js')}}"></script>
<script src="{{url('assets/js/components/hs.hamburgers.js')}}"></script>
<script src="{{url('assets/js/components/hs.unfold.js')}}"></script>
<script src="{{url('assets/js/components/hs.focus-state.js')}}"></script>
<script src="{{url('assets/js/components/hs.malihu-scrollbar.js')}}"></script>
<script src="{{url('assets/js/components/hs.validation.js')}}"></script>
<script src="{{url('assets/js/components/hs.fancybox.js')}}"></script>
<script src="{{url('assets/js/components/hs.onscroll-animation.js')}}"></script>
<script src="{{url('assets/js/components/hs.slick-carousel.js')}}"></script>
<script src="{{url('assets/js/components/hs.show-animation.js')}}"></script>
<script src="{{url('assets/js/components/hs.svg-injector.js')}}"></script>
<script src="{{url('assets/js/components/hs.go-to.js')}}"></script>
<script src="{{url('assets/js/components/hs.selectpicker.js')}}"></script>

<!-- JS Plugins Init. -->
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            direction: 'horizontal',
            pageContainer: $('.container'),
            breakpoint: 767.98,
            hideTimeOut: 0
        });

        // initialization of svg injector module
        $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of popups
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of countdowns
        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
            yearsElSelector: '.js-cd-years',
            monthsElSelector: '.js-cd-months',
            daysElSelector: '.js-cd-days',
            hoursElSelector: '.js-cd-hours',
            minutesElSelector: '.js-cd-minutes',
            secondsElSelector: '.js-cd-seconds'
        });

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of forms
        $.HSCore.components.HSFocusState.init();

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate', {
            rules: {
                confirmPassword: {
                    equalTo: '#signupPassword'
                }
            }
        });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of fancybox
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of hamburgers
        $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            beforeClose: function () {
                $('#hamburgerTrigger').removeClass('is-active');
            },
            afterClose: function() {
                $('#headerSidebarList .collapse.show').collapse('hide');
            }
        });

        $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
            e.preventDefault();

            var target = $(this).data('target');

            if($(this).attr('aria-expanded') === "true") {
                $(target).collapse('hide');
            } else {
                $(target).collapse('show');
            }
        });

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');
    });
</script>
</body>
</html>
