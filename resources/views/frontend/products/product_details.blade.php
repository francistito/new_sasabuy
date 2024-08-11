
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@section('content')

    <section class="mb-4 pt-3">
        <div class="container">
            <div class="bg-white py-3">
                <div class="row">
                    <!-- Product Image Gallery -->
                    <div class="col-xl-5 col-lg-6 mb-4">
                        <div class="sticky-top z-3 row gutters-10">
                            <!-- Gallery Images -->
                            <div class="col-12">
                                <div class="aiz-carousel product-gallery arrow-inactive-transparent arrow-lg-none slick-initialized slick-slider" data-nav-for=".product-gallery-thumb" data-fade="true" data-auto-height="true" data-arrows="true"><button type="button" class="slick-prev slick-arrow slick-disabled" aria-disabled="true" style="display: inline-block;"><i class="las la-angle-left"></i></button><div class="slick-list draggable" style="height: 450.5px;"><div class="slick-track" style="opacity: 1; width: 890px;"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 445px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><div><div class="carousel-box img-zoom rounded-0" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
                                                        <img class="img-fluid h-auto mx-auto lazyloaded" src="{{url(product_image($product))}}" data-src="{{url(product_image($product))}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                                        <img role="presentation" alt="" src="{{url(product_image($product))}}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 900px; height: 900px; border: none; max-width: none; max-height: none;"></div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 445px; position: relative; left: -445px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1"><div><div class="carousel-box img-zoom rounded-0" style="width: 100%; display: inline-block; position: relative; overflow: hidden;">
                                                        <img class="img-fluid h-auto mx-auto ls-is-cached lazyloaded" src="{{url(product_image($product))}}" data-src="{{url(product_image($product))}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                                        <img role="presentation" alt="" src="{{url(product_image($product))}}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 900px; height: 900px; border: none; max-width: none; max-height: none;"></div></div></div></div></div><button type="button" class="slick-next slick-arrow" style="display: inline-block;" aria-disabled="false"><i class="las la-angle-right"></i></button></div>
                            </div>
                            <!-- Thumbnail Images -->
                            <div class="col-12 mt-3 d-none d-lg-block">
                                <div class="aiz-carousel half-outside-arrow product-gallery-thumb slick-initialized slick-slider" data-items="7" data-nav-for=".product-gallery" data-focus-select="true" data-arrows="true" data-vertical="false" data-auto-height="true"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 128px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 64px;"><div><div class="carousel-box c-pointer rounded-0" style="width: 100%; display: inline-block;">
                                                        <img class="mw-100 size-60px mx-auto border p-1 lazyloaded" src="{{url(product_image($product))}}" data-src="{{url(product_image($product))}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 64px;"><div><div class="carousel-box c-pointer rounded-0" style="width: 100%; display: inline-block;">
                                                        <img class="mw-100 size-60px mx-auto border p-1 lazyloaded" src="{{url(product_image($product))}}" data-src="{{url(product_image($product))}}" onerror="this.onerror=null;this.src='{{url(product_image($product))}}';">
                                                    </div></div></div></div></div></div>
                            </div>


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
                                <a href="#" class="text-reset hov-text-primary fs-14 fw-700">{{$product->brand->name??null}}</a>
                            </div>

                            <!-- Seller Info -->
                            <div class="d-flex flex-wrap align-items-center">

                                <!-- Messase to seller -->
                                <div class="">

{{--                                    <div class="floating-whatsapp" @click="openWhatsApp">--}}
{{--                                        <img src="@/assets/img/whatsapp.jpg" alt="WhatsApp" />--}}
{{--                                    </div>--}}
                                    <button class="btn btn-sm btn-success btn-outline-secondary-base hov-svg-white hov-text-white rounded-4" onclick="openWhatsApp()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mr-2 has-transition">
                                            <g id="Group_23918" data-name="Group 23918" transform="translate(1053.151 256.688)">
                                                <path id="Path_3012" data-name="Path 3012" d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z" transform="translate(-1178 -341)" fill="#FFBA00"></path>
                                                <path id="Path_3013" data-name="Path 3013" d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1" transform="translate(-1182 -337)" fill="#FFBA00"></path>
                                                <path id="Path_3014" data-name="Path 3014" d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(-1181 -343.5)" fill="#FFBA00"></path>
                                                <path id="Path_3015" data-name="Path 3015" d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1" transform="translate(-1181 -346.5)" fill="#FFBA00"></path>
                                            </g>
                                        </svg>

                                        Message Seller
                                    </button>
                                </div>
                                <!-- Size guide -->
                            </div>



                            <hr>

                            <!-- For auction product -->
                            <!-- Without auction product -->
                            <!-- Without Wholesale -->

                            <div class="row no-gutters mb-3">
                                <div class="col-sm-2">
                                    <div class="text-secondary fs-14 fw-400">Price</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex align-items-center">
                                        <!-- Discount Price -->
                                        <strong class="fs-16 fw-700 text-primary">
                                            {{currency_code()}} {{formatPrice($product->max_price)}}
                                        </strong>

                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters mb-3">
                                <div class="col-sm-2">
                                    <div class="text-secondary fs-14 fw-400">Description</div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="d-flex align-items-center">
                                        <!-- Discount Price -->
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

                        @foreach($related_products as $product)
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                {{--                                    <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>--}}
                                                <h5 class="mb-1 product-item__title"><a href="{{route('product.details',$product->slug)}}" class="text-blue font-weight-bold">{{$product->name}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{route('product.details',$product->slug)}}" class="d-block text-center"><img class="img-fluid" src="{{url(product_image($product))}}" alt="Image Description"></a>
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

    <script>function openWhatsApp() {
            const phoneNumber = '+255{{$product_user->phone_number}}'; // Replace with your WhatsApp number
            const message = 'Hello, You need {{$product->name}}!'; // Optional
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(url, '_blank');
        }




    </script>
@endpush

