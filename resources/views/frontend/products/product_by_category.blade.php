
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@section('content')

    <section class="mb-4 pt-4">
        <div class="container sm-px-0 pt-2">
            <form class="" id="search-form" action="" method="GET">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            <div class="collapse-sidebar c-scrollbar-light text-left">
                                <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                    <h3 class="h6 mb-0 fw-600">Filters</h3>
                                    <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                        <i class="las la-times la-2x"></i>
                                    </button>
                                </div>

                                <div class="bg-white border mb-3">
                                    <div class="fs-16 fw-700 p-3">
                                        <a href="#collapse_1" class="dropdown-toggle filter-section text-dark d-flex align-items-center justify-content-between" data-toggle="collapse">
                                            Categories
                                        </a>
                                    </div>
                                    <div class="collapse show" id="collapse_1">
                                        <ul class="p-3 mb-0 list-unstyled">
                                            <li class="mb-3">
                                                <a class="text-reset fs-14 fw-600 hov-text-primary" href="{{route('product.search')}}">
                                                    <i class="las la-angle-left"></i>
                                                    All Categories
                                                </a>
                                            </li>
                                            @foreach($parent_categories as $parent_category)

                                                <li class="mb-3">
                                                    <a class="text-reset fs-14 fw-600 hov-text-primary" href="{{route('product.category',$parent_category->id)}}">
                                                        <i class="las la-angle-left"></i>
                                                        {{$parent_category->name}}
                                                    </a>
                                                </li>


                                            @endforeach


                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9">

                        <ul class="breadcrumb bg-transparent py-0 px-1">
                            <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                                <a class="text-reset" href="https://demo.activeitzone.com/ecommerce">Home</a>
                            </li>
                            <li class="breadcrumb-item opacity-50 hov-opacity-100">
                                <a class="text-reset" href="https://demo.activeitzone.com/ecommerce/search">All Categories</a>
                            </li>
                            <li class="text-dark fw-600 breadcrumb-item">
                                "Hot Categories"
                            </li>
                        </ul>

                        <div class="text-left">
                            <div class="row gutters-5 flex-wrap align-items-center">
                                <div class="col-lg col-10">
                                    <h1 class="fs-20 fs-md-24 fw-700 text-dark">
                                        Hot Categories
                                    </h1>
                                    <input type="hidden" name="keyword" value="">
                                </div>
                                <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                    <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                        <i class="la la-filter la-2x"></i>
                                    </button>
                                </div>
                                <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                    <div class="dropdown bootstrap-select form-control form-control-sm aiz- rounded-0"><select class="form-control form-control-sm aiz-selectpicker rounded-0" name="sort_by" onchange="if (!window.__cfRLUnblockHandlers) return false; filter()" tabindex="-98">
                                            <option value="">Sort By</option>
                                            <option value="newest">Newest</option>
                                            <option value="oldest">Oldest</option>
                                            <option value="price-asc">Price low to high</option>
                                            <option value="price-desc">Price high to low</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Sort By"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Sort By</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                        </div>

                        <div class="px-3">
                            <div class="row gutters-16 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2 border-top border-left">
                                @foreach($products as $product)
                                    <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                        <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                            <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                <a href="{{route('product.details',$product->slug)}}" class="d-block h-100">
                                                    <img class="mx-auto img-fit has-transition ls-is-cached lazyloaded" src="{{url(product_image($product))}}" alt="{{$product->name}}" title="{{$product->name}} onerror="this.onerror=null;this.src='{{url(product_image($product))}}';">
                                                </a>


                                            </div>
                                            <div class="p-2 p-md-3 text-left">

                                                <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                    <a href="{{route('product.details',$product->slug)}}" class="d-block text-reset hov-text-primary" title="Like Dreams Large Sherpa Tote Bag, Inner Pocket Vegan Leather, Large Tote Hand bags for Women">{{$product->name}}</a>
                                                </h3>
                                                <div class="fs-14 d-flex justify-content-center mt-3">


                                                    <div class="">
                                                        <span class="fw-700 text-primary">{{currency_code()}} {{formatPrice($product->max_price)}} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="aiz-pagination mt-4">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection


