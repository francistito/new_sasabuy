<div id="section_featured">
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="">Featured Products</span>
                </h3>
                <!-- Links -->

            </div>
            <!-- Products Section -->
            <div class="px-sm-3">
                <div class="aiz-carousel sm-gutters-16 arrow-none slick-initialized slick-slider" data-items="6"
                     data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2"
                     data-arrows="true" data-infinite="false">
                    <button type="button" class="slick-prev slick-arrow slick-disabled" aria-disabled="true"
                            style="display: inline-block;"><i class="las la-angle-left"></i></button>
                    <div class="slick-list draggable">
                        <div class="row">
                            @foreach($products  as $product)
                                <div class="col-md-2">
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                         style="width: 223px;">
                                        <div>
                                            <div
                                                class="carousel-box position-relative px-0 has-transition hov-animate-outline border-right border-top border-bottom  border-left "
                                                style="width: 100%; display: inline-block;">
                                                <div class="px-3">
                                                    <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                                        <div
                                                            class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                            <!-- Image -->
                                                            <a href="https://demo.activeitzone.com/ecommerce/product/like-dreams-large-sherpa-tote-bag-inner-pocket-vegan-leather-large-tote-hand-bags-for-women"
                                                               class="d-block h-100" tabindex="0">
                                                                <img
                                                                    class="mx-auto img-fit has-transition ls-is-cached lazyloaded"
                                                                    src="{{url(product_image($product))}}"
                                                                    alt="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women"
                                                                    title="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women"
                                                                    onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                                            </a>
                                                            <!-- Discount percentage tag -->
                                                            <!-- Wholesale tag -->
                                                            <!-- wishlisht & compare icons -->

                                                        </div>

                                                        <div class="p-2 p-md-3 text-left">
                                                            <!-- Product name -->
                                                            <h3 class="fw-400 fs-13 text-truncate-1 lh-1-4 mb-0 h-35px text-center">
                                                                <a href="{{route('product.details',$product->slug)}}"
                                                                   class="d-block text-reset hov-text-primary"
                                                                   title="{{$product->name}}"
                                                                   tabindex="0">{{$product->name}}</a>
                                                            </h3>
                                                            <div class="fs-14 d-flex justify-content-center mt-3">
                                                                <!-- Previous price -->
                                                                <!-- price -->
                                                                <div class="">
                                                                    <span class="fw-700 text-primary">{{currency_code()}} {{formatPrice($product->max_price)}} </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="slick-next slick-arrow" style="display: inline-block;"
                            aria-disabled="false"><i class="las la-angle-right"></i></button>
                </div>
            </div>
        </div>
    </section>
</div>
