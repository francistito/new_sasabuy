
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])
@push('after-styles')

    <style>
        /* Add hover effects */
        .product-item__inner:hover {
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design Enhancements */
        @media (max-width: 768px) {
            .product-item__title {
                font-size: 16px; /* Adjust font size on smaller screens */
            }
            .product-price {
                font-size: 14px; /* Adjust font size on smaller screens */
            }
        }
    </style>
@endpush

@section('content')


    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{route('product.category',$category->id)}}">{{$category->name}}</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">  {{$product->name}}</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <section class="mb-4 pt-3">
        <div class="container">
            <div class="bg-white py-3">
                <div class="row">
                    <!-- Product Image Gallery -->
                    <div class="col-xl-5 col-lg-6 mb-4">
                        <div class="sticky-top z-3 row gutters-10">
                            <!-- Gallery Images -->
                            <div class="col-12">
                                <div class="aiz-carousel product-gallery arrow-inactive-transparent arrow-lg-none slick-initialized slick-slider"
                                     data-nav-for=".product-gallery-thumb" data-fade="true" data-auto-height="true" data-arrows="true">

                                    <div class="slick-list draggable" style="height: 450.5px;">
                                        <div class="slick-track" style="opacity: 1; width: 890px;">
                                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 445px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                <div>
                                                    <div class="carousel-box img-zoom rounded-0" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
                                                        <img class="img-fluid h-auto mx-auto lazyloaded" src="{{url(product_image($product))}}"
                                                             data-src="{{url(product_image($product))}}"
                                                             onerror="this.onerror=null;this.src='{{url(product_image($product))}}';"
                                                             loading="lazy" style="width: 720px;height: 660px">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add more slides if needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnail Images -->
{{--                            <div class="col-12 mt-3 d-none d-lg-block">--}}
{{--                                <div class="aiz-carousel half-outside-arrow product-gallery-thumb slick-initialized slick-slider"--}}
{{--                                     data-items="7" data-nav-for=".product-gallery" data-focus-select="true" data-arrows="true" data-vertical="false" data-auto-height="true">--}}
{{--                                    <div class="slick-list draggable">--}}
{{--                                        <div class="slick-track" style="opacity: 1; width: 128px;">--}}
{{--                                            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 64px;">--}}
{{--                                                <div>--}}
{{--                                                    <div class="carousel-box c-pointer rounded-0" style="width: 100%; display: inline-block;">--}}
{{--                                                        <img class="mw-100 size-60px mx-auto border p-1 lazyloaded" src="{{url(other_images($product))}}"--}}
{{--                                                             data-src="{{url(other_images($product))}}"--}}
{{--                                                             onerror="this.onerror=null;this.src='{{url(other_images($product))}}';"--}}
{{--                                                             loading="lazy">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Add more thumbnails if needed -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-xl-7 col-lg-6">
                        <div class="text-left">
                            <!-- Product Name -->
                            <h2 class="mb-4 fs-16 fw-700 text-dark">
                                {{$product->name}}
                            </h2>

                            <!-- Brand Logo & Name -->
                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <span class="text-secondary fs-14 fw-400 mr-4 w-80px">Brand</span><br>
                                <a href="#" class="text-reset hov-text-primary fs-14 fw-700">{{$product->brand->name ?? null}}</a>
                            </div>

                            <!-- Seller Info -->
                            <div class="d-flex flex-wrap align-items-center">
                                <!-- Message to seller -->
                                <div class="">
                                    <button class="btn btn-sm btn-success btn-outline-secondary-base hov-svg-white hov-text-white rounded-4" onclick="openWhatsApp()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mr-2 has-transition">
                                            <!-- SVG Content -->
                                        </svg>
                                        Message Seller
                                    </button>
                                </div>
                            </div>

                            <hr>

                            <!-- Product Price -->
                            <div class="row no-gutters mb-3">
                                <div class="col-sm-2">
                                    <div class="text-secondary fs-14 fw-400">Price</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex align-items-center">
                                        <strong class="fs-16 fw-700 text-primary">
                                            {{currency_code()}} {{formatPrice($product->max_price)}}
                                        </strong>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="row no-gutters mb-3">
                                <div class="col-sm-2">
                                    <div class="text-secondary fs-14 fw-400">Description</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex align-items-center">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="mb-6">
                <div class="position-relative">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Related Products</h3>
                    </div>
                    <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visible pb-7 pt-2 px-1"
                         data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                         data-slides-show="7"
                         data-slides-scroll="1"
                         data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                         data-arrow-left-classes="fa fa-angle-left right-1"
                         data-arrow-right-classes="fa fa-angle-right right-0"
                         data-speed="300"
                         data-easing="linear"
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
                        @foreach($related_products as $product)
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <h5 class="mb-1 product-item__title">
                                                    <a href="{{ route('product.details', $product->slug) }}" class="text-blue font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                </h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('product.details', $product->slug) }}" class="d-block text-center">
                                                        <img class="img-fluid" src="{{ url(product_image($product)) }}" alt="{{ $product->name }} image" loading="lazy">
                                                    </a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="product-price">
                                                        <div class="text-gray-100">{{ currency_code() }} {{ formatPrice($product->max_price) }}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block product-add-cart">
                                                        <a href="{{ route('product.details', $product->slug) }}" class="btn-add-cart btn-primary transition-3d-hover" aria-label="Add to Cart">
                                                            <i class="ec ec-add-to-cart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <!-- Add footer content if needed -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@push('after-scripts')
    <script>
        // Example: Debounce function for resize event
        function debounce(func, wait) {
            let timeout;
            return function(...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        }

        window.addEventListener('resize', debounce(() => {
            // Your resize handling code
        }, 250));
    </script>
    <script>function openWhatsApp() {
            const phoneNumber = '+255{{$product_user->phone_number}}'; // Replace with your WhatsApp number
            const message = 'Hello, You need {{$product->name}}!'; // Optional
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(url, '_blank');
        }




    </script>
@endpush

