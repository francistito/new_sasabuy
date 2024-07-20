<div class="tab-pane fade pt-2 show active" id="Tpills-one-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
<ul class="row list-unstyled products-group no-gutters">
        @foreach($products  as $product)

        <li class="col-6 col-wd-3 col-md-4 product-item">
            <div class="product-item__outer h-100">
                <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
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
{{--                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>--}}
{{--                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
