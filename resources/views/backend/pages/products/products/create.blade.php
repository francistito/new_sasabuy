@extends('backend.layouts.master')

@section('title')
    {{  ('Add Product') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">{{  ('Add Product') }}</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 g-4">

                <!--left sidebar-->
                <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                    <form action="{{ route('product.store') }}" method="POST" class="pb-650" id="product-form"  enctype="multipart/form-data">
                        @csrf
                        <!--basic information start-->
                        <div class="card mb-4" id="section-1">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Basic Information') }}</h5>

                                <div class="mb-4">
                                    <label for="name" class="form-label">{{  ('Product Name') }}</label>
                                    <input class="form-control" type="text" id="name"
                                        placeholder="{{  ('Type your product name') }}" name="name" required>
                                    <span class="fs-sm text-muted">
                                        {{  ('Product name is required and recommended to be unique.') }}
                                    </span>
                                </div>
                                <div class="mb-4">
                                    <label for="short_description"
                                        class="form-label">{{  ('Short Description') }}</label>
                                    <textarea class="form-control" id="short_description"
                                        placeholder="{{  ('Type your product short description') }}" rows="5" name="short_description"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="description" class="form-label">{{  ('Description') }}</label>
                                    <textarea id="description" class="editor" name="description"></textarea>
                                </div>

                            </div>
                        </div>
                        <!--basic information end-->

                        <!--product image and gallery start-->
                        <div class="card mb-4" id="section-2">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Images') }}</h5>
                                <div class="mb-4">
                                    <label class="form-label">{{  ('Thumbnail') }} (592x592)</label>
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">{{  ('Choose Product Thumbnail') }}</span>
                                        <!-- choose media -->

                                        <input type="file" name="product_thumbnail">
{{--                                        <div class="tt-product-thumb show-selected-files mt-3">--}}
{{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
{{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
{{--                                                onclick="showMediaManager(this)" data-selection="single">--}}
{{--                                                <input type="hidden" name="image">--}}
{{--                                                <div class="no-avatar rounded-circle">--}}
{{--                                                    <span><i data-feather="plus"></i></span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <!-- choose media -->
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">{{  ('Gallery') }}</label>
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">{{  ('Choose Gallery Images') }}</span>

                                        <!-- choose media -->

                                        <input type="file" name="other_images">

                                        {{--                                        <div class="tt-product-thumb show-selected-files mt-3">--}}
{{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
{{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
{{--                                                onclick="showMediaManager(this)" data-selection="multiple">--}}
{{--                                                <input type="hidden" name="images">--}}
{{--                                                <div class="no-avatar rounded-circle">--}}
{{--                                                    <span><i data-feather="plus"></i></span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <!-- choose media -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product image and gallery end-->

                        <!--product category start-->
                        <div class="card mb-4" id="section-3">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Product Categories') }}</h5>
                                <div class="mb-4">
                                    <select class="select2 form-control" multiple="multiple"
                                        data-placeholder="{{  ('Select categories') }}" name="category_ids[]"
                                        required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->collectLocalization('name') }}</option>
                                            @foreach ($category->childrenCategories as $childCategory)
                                                @include('backend.pages.products.products.subCategory', [
                                                    'subCategory' => $childCategory,
                                                ])
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--product category end-->

                        <!--product tags start-->
                        <div class="card mb-4" id="section-tags">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Product Tags') }}</h5>
                                <div class="mb-4">
                                    <select class="form-control select2" name="tag_ids[]" data-toggle="select2" multiple
                                        data-placeholder="{{  ('Select tags..') }}">
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">
                                                {{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--product tags end-->

                        <!--product brand and unit start-->
                        <div class="row" id="section-4">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-4">{{  ('Product Brand') }}</h5>
                                        <div class="tt-select-brand">
                                            <select class="select2 form-control" id="selectBrand" name="brand_id">
                                                <option value="">{{  ('Select Brand') }}</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">
                                                        {{ $brand->collectLocalization('name') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-4">{{  ('Product Unit') }}</h5>
                                        <div class="tt-select-brand">
                                            <select class="select2 form-control" id="selectUnit" name="unit_id">
                                                <option value="">{{  ('Select Unit') }}</option>
                                                @foreach ($units as $unit)
                                                    <option value="{{ $unit->id }}">
                                                        {{ $unit->collectLocalization('name') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product brand and unit end-->

                        <!--product price sku and stock start-->
                        <div class="card mb-4" id="section-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-4">{{  ('Price, Sku & Stock') }}</h5>
                                    <div class="form-check form-switch">
                                        <label class="form-check-label fw-medium text-primary"
                                            for="is_variant">{{  ('Has Variations?') }}</label>
                                        <input type="checkbox" class="form-check-input" id="is_variant"
                                            onchange="isVariantProduct(this)" name="is_variant">
                                    </div>
                                </div>

                                <!-- without variation start-->
                                <div class="noVariation">
                                    <div class="row g-3">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">{{  ('Price') }}</label>
                                                <input type="number" min="0" step="0.0001" id="price"
                                                    name="price" placeholder="{{  ('Product price') }}"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="stock" class="form-label">{{  ('Stock') }} <small
                                                        class="text-warning">({{  ('Default Location') }})</small></label>
                                                <input type="number" id="stock"
                                                    placeholder="{{  ('Stock qty') }}" name="stock"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="sku" class="form-label">{{  ('SKU') }}</label>
                                                <input type="text" id="sku"
                                                    placeholder="{{  ('Product sku') }}" name="sku"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="code" class="form-label">{{  ('Code') }}</label>
                                                <input type="text" id="code"
                                                    placeholder="{{  ('Product code') }}" name="code"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- without variation start end-->


                                <!--for variation row start-->
                                <div class="hasVariation" style="display: none">
                                    @php
                                        $sizes = \App\Models\VariationValue::isActive()
                                            ->where('variation_id', 1)
                                            ->get();

                                        $colors = \App\Models\VariationValue::isActive()
                                            ->where('variation_id', 2)
                                            ->get();
                                    @endphp

                                    <div class="row g-3">
                                        <!-- size -->
                                        @if (count($sizes) > 0)
                                            <div class="col-lg-6">
                                                <div class="mb-0">
                                                    <label for="product-thumb"
                                                        class="form-label">{{  ('Sizes') }}</label>
                                                    <input type="hidden" name="chosen_variations[]" value="1">
                                                    <select class="select2 form-control" multiple="multiple"
                                                        data-placeholder="{{  ('Select Sizes') }}"
                                                        onchange="generateVariationCombinations()"
                                                        name="option_1_choices[]">
                                                        @foreach ($sizes as $size)
                                                            <option value="{{ $size->id }}">
                                                                {{ $size->collectLocalization('name') }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- size end -->

                                        <!-- colors -->
                                        @if (count($colors) > 0)
                                            <div class="col-lg-6">
                                                <div class="mb-0">
                                                    <label for="product-thumb"
                                                        class="form-label">{{  ('Colors') }}</label>
                                                    <input type="hidden" name="chosen_variations[]" value="2">
                                                    <select class="select2 form-control" multiple="multiple"
                                                        data-placeholder="{{  ('Select colors') }}"
                                                        onchange="generateVariationCombinations()"
                                                        name="option_2_choices[]">
                                                        @foreach ($colors as $color)
                                                            <option value="{{ $color->id }}">
                                                                {{ $color->collectLocalization('name') }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- colors end -->
                                    </div>

                                    @if (count($variations) > 0)
                                        <div class="row g-3 mt-1">
                                            <div class="col-lg-6">
                                                <div class="mb-0">
                                                    <label class="form-label">{{  ('Select Variations') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-0">
                                                    <label class="form-label">{{  ('Select Values') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chosen_variation_options">
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div class="mb-0">
                                                        <select class="form-select select2"
                                                            onchange="getVariationValues(this)"
                                                            name="chosen_variations[]">
                                                            <option value="">{{  ('Select a Variation') }}
                                                            </option>
                                                            @foreach ($variations as $key => $variation)
                                                                <option value="{{ $variation->id }}">
                                                                    {{ $variation->collectLocalization('name') }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-0">
                                                        <div class="variationvalues">
                                                            <input type="text" class="form-control"
                                                                placeholder="{{  ('Select variation values') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-4">
                                                    <button class="btn btn-link px-0 fw-medium fs-base" type="button"
                                                        onclick="addAnotherVariation()">
                                                        <i data-feather="plus" class="me-1"></i>
                                                        {{  ('Add Another Variation') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="variation_combination" id="variation_combination">
                                        {{-- combinations will be added here via ajax response --}}
                                    </div>

                                    <!-- size guide -->
                                    <div class="mt-3">
                                        <label class="form-label">{{  ('Product Size Guide') }}</label>
                                        <div class="tt-image-drop rounded">
                                            <span class="fw-semibold">{{  ('Choose Size Guide Image') }}</span>
                                            <!-- choose media -->
                                            <div class="tt-product-thumb show-selected-files mt-3">
                                                <div class="avatar avatar-xl cursor-pointer choose-media"
                                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                                    onclick="showMediaManager(this)" data-selection="single">
                                                    <input type="hidden" name="size_guide">
                                                    <div class="no-avatar rounded-circle">
                                                        <span><i data-feather="plus"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- choose media -->
                                        </div>
                                    </div>
                                    <!-- size guide end -->
                                </div>
                            </div>
                            <!--for variation row end-->
                        </div>
                        <!--product price sku and stock end-->

                        <!--product discount start-->
                        <div class="card mb-4" id="section-6">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Product Discount') }}</h5>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">{{  ('Date Range') }}</label>
                                            <div class="input-group">
                                                <input class="form-control date-range-picker date-range" type="text"
                                                    placeholder="{{  ('Start date - End date') }}"
                                                    name="date_range">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="discount_value"
                                                class="form-label">{{  ('Discount Amount') }}</label>
                                            <input class="form-control" type="number"
                                                placeholder="{{  ('Type discount amount') }}" id="discount_value"
                                                value="0" step="0.001" name="discount_value">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="discount_type"
                                                class="form-label">{{  ('Percent or Fixed') }}</label>
                                            <select class="select2 form-control" id="discount_type" name="discount_type">
                                                <option value="percent">{{  ('Percent %') }}</option>
                                                <option value="flat">{{  ('Fixed') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product discount end-->

                        <!--shipping configuration start-->
                        <div class="card mb-4 d-none" id="section-7">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Shipping Configuration') }}</h5>

                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="mb-0">
                                            <label for="min_purchase_qty"
                                                class="form-label">{{  ('Minimum Purchase Qty') }}</label>
                                            <input type="number" id="min_purchase_qty" name="min_purchase_qty"
                                                min="1" value="1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-0">
                                            <label for="max_purchase_qty"
                                                class="form-label">{{  ('Maximum Purchase Qty') }}</label>
                                            <input type="number" id="max_purchase_qty" name="max_purchase_qty"
                                                min="1" value="1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none">
                                        <div class="mb-0">
                                            <label for="standard_delivery_hours"
                                                class="form-label">{{  ('Standard Delivery Time') }}</label>
                                            <div class="input-group">
                                                <input type="number" step="0.01" class="form-control"
                                                    name="standard_delivery_hours" value="72" min="0" required
                                                    id="standard_delivery_hours">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">hr(s)</span></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none">
                                        <div class="mb-0">
                                            <label for="express_delivery_hours"
                                                class="form-label">{{  ('Express Delivery Time') }}</label>
                                            <div class="input-group">
                                                <input type="number" step="0.01" class="form-control"
                                                    name="express_delivery_hours" value="24" min="0" required
                                                    id="express_delivery_hours">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">hr(s)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--shipping configuration end-->

                        <!--product tax start-->
                        <div class="card mb-4" id="section-8">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Product Taxes') }} ({{  ('Default 0%') }})</h5>
                                <div class="row g-3">
                                    @foreach ($taxes as $tax)
                                        <div class="col-lg-6">
                                            <div class="mb-0">
                                                <label class="form-label">{{ $tax->name }}</label>
                                                <input type="hidden" value="{{ $tax->id }}" name="tax_ids[]">
                                                <input type="number" lang="en" min="0" value="0"
                                                    step="0.01" placeholder="{{  ('Tax') }}" name="taxes[]"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-0">
                                                <label class="form-label">{{  ('Percent or Fixed') }}</label>
                                                <select class="select2 form-control" name="tax_types[]">
                                                    <option value="percent">{{  ('Percent') }} % </option>
                                                    <option value="flat">{{  ('Fiexed') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--product tax end-->

                        <!--product sell target & status start-->
                        <div class="row g-3" id="section-9">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-4">{{  ('Sell Target') }}</h5>
                                        <div class="tt-select-brand">
                                            <input type="number" min="0" name="sell_target" class="form-control"
                                                placeholder="{{  ('Type your sell target') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="mb-4">{{  ('Product Status') }}</h5>
                                        <div class="tt-select-brand">
                                            <select class="select2 form-control" id="is_published" name="is_published">
                                                <option value="1">{{  ('Published') }}</option>
                                                <option value="0">{{  ('Unpublished') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product sell target & status end-->

                        <!--seo meta description start-->
{{--                        <div class="card mb-4" id="section-10">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="mb-4">{{  ('SEO Meta Configuration') }}</h5>--}}

{{--                                <div class="mb-4">--}}
{{--                                    <label for="meta_title" class="form-label">{{  ('Meta Title') }}</label>--}}
{{--                                    <input type="text" name="meta_title" id="meta_title"--}}
{{--                                        placeholder="{{  ('Type meta title') }}" class="form-control">--}}
{{--                                    <span class="fs-sm text-muted">--}}
{{--                                        {{  ('Set a meta tag title. Recommended to be simple and unique.') }}--}}
{{--                                    </span>--}}
{{--                                </div>--}}

{{--                                <div class="mb-4">--}}
{{--                                    <label for="meta_description"--}}
{{--                                        class="form-label">{{  ('Meta Description') }}</label>--}}
{{--                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="4"--}}
{{--                                        placeholder="{{  ('Type your meta description') }}"></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="mb-4">--}}
{{--                                    <label class="form-label">{{  ('Meta Image') }}</label>--}}
{{--                                    <div class="tt-image-drop rounded">--}}
{{--                                        <span class="fw-semibold">{{  ('Choose Meta Image') }}</span>--}}
{{--                                        <!-- choose media -->--}}
{{--                                        <div class="tt-product-thumb show-selected-files mt-3">--}}
{{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
{{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
{{--                                                onclick="showMediaManager(this)" data-selection="single">--}}
{{--                                                <input type="hidden" name="meta_image">--}}
{{--                                                <div class="no-avatar rounded-circle">--}}
{{--                                                    <span><i data-feather="plus"></i></span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- choose media -->--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--seo meta description end-->

                        <!-- submit button -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <button class="btn btn-primary" type="submit">
                                        <i data-feather="save" class="me-1"></i> {{  ('Save Product') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- submit button end -->

                    </form>
                </div>

                <!--right sidebar-->
                <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                    <div class="card tt-sticky-sidebar">
                        <div class="card-body">
                            <h5 class="mb-4">{{  ('Product Information') }}</h5>
                            <div class="tt-vertical-step">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#section-1" class="active">{{  ('Basic Information') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-2">{{  ('Product Images') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-3">{{  ('Category') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-tags">{{  ('Product tags') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-4">{{  ('Product Brand & Unit') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-5">{{  ('Price, SKU, Stock & Variations') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-7">{{  ('Shipping Configuration') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-8">{{  ('Product Taxes') }}</a>
                                    </li>

                                    <li>
                                        <a href="#section-9">{{  ('Sell Target and Status') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-10">{{  ('SEO Meta Options') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- bundle -->


<!-- localizations & others -->
<script>
    'use strict';

    var TT = TT || {};
    TT.  = {
        no_data_found: '{{  ('No data found') }}',
        selected_file: '{{  ('Selected File') }}',
        selected_files: '{{  ('Selected Files') }}',
        file_added: '{{  ('File added') }}',
        files_added: '{{  ('Files added') }}',
        no_file_chosen: '{{  ('No file chosen') }}',
    };
    TT.baseUrl = '{{ \Request::root() }}';

    // on click delete confirmation -- outside footable
    function confirmDelete(thisLink) {
        var url = $(thisLink).data("href");
        $("#delete-modal").modal("show");
        $("#delete-link").attr("href", url);
    }

    // feather icon refresh
    function initFeather() {
        feather.replace();
    }
    initFeather();
</script>

<!-- media-manager scripts -->
{{--@include('backend.inc.media-manager.uppyScripts')--}}

<script>
    "use strict"
    $(function() {

        // footable js
        $(function() {
            $("table.tt-footable").footable({
                on: {
                    "ready.ft.table": function(e, ft) {
                        initTooltip();
                        deleteConfirmation();
                    },
                },
            });
        });

        //    tooltip
        function initTooltip() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        }
        initTooltip();

        // delete confirmation
        function deleteConfirmation() {
            $(".confirm-delete").click(function(e) {
                e.preventDefault();
                var url = $(this).data("href");
                $("#delete-modal").modal("show");
                $("#delete-link").attr("href", url);
            });
        }

        //    select2 js
        $(".select2").select2();
        $(".select2Max3").select2({
            maximumSelectionLength: 3
        });

        // modal select2
        function modalSelect2(parent = '.modalParentSelect2') {
            $('.modalSelect2').select2({
                dropdownParent: $(parent)
            });
        }
        modalSelect2();

        //    flatpickr
        $(".date-picker").each(function(el) {
            var $this = $(this);
            var options = {
                dateFormat: 'm/d/Y'
            };

            var date = $this.data("date");
            if (date) {
                options.defaultDate = date;
            }

            $this.flatpickr(options);
        });



        $(".date-range-picker").each(function(el) {
            var $this = $(this);
            var options = {
                mode: "range",
                showMonths: 2,
                dateFormat: 'm/d/Y'
            };

            var start = $this.data("startdate");
            var end = $this.data("enddate");

            if (start && end) {
                options.defaultDate = [start, end];
            }

            $this.flatpickr(options);
        });

        // summernote
        $(".editor").each(function(el) {
            var $this = $(this);
            var buttons = $this.data("buttons");
            var minHeight = $this.data("min-height");
            var placeholder = $this.attr("placeholder");
            var format = $this.data("format");

            buttons = !buttons ? [
                    ["font", ["bold", "underline", "italic", "clear"]],
                    ['fontname', ['fontname']],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["style", ["style"]],
                    ['fontsize', ['fontsize']],
                    ["color", ["color"]],
                    ["insert", ["link", "picture", "video"]],
                    ["view", ["undo", "redo"]],
                ] :
                buttons;
            placeholder = !placeholder ? "" : placeholder;
            minHeight = !minHeight ? 150 : minHeight;
            format = typeof format == "undefined" ? false : format;

            $this.summernote({
                toolbar: buttons,
                placeholder: placeholder,
                height: minHeight,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                disableDragAndDrop: true,
                callbacks: {

                },
            });

            var nativeHtmlBuilderFunc = $this.summernote(
                "module",
                "videoDialog"
            ).createVideoNode;

            $this.summernote("module", "videoDialog").createVideoNode = function(url) {
                var wrap = $(
                    '<div class="embed-responsive embed-responsive-16by9"></div>'
                );
                var html = nativeHtmlBuilderFunc(url);
                html = $(html).addClass("embed-responsive-item");
                return wrap.append(html)[0];
            };
        });

        // add more
        $('[data-toggle="add-more"]').each(function() {
            var $this = $(this);
            var content = $this.data("content");
            var target = $this.data("target");

            $this.on("click", function(e) {
                e.preventDefault();
                $(target).append(content);
                $('.select2').select2();
            });
        });

        // remove parent
        $(document).on(
            "click",
            '[data-toggle="remove-parent"]',
            function() {
                var $this = $(this);
                var parent = $this.data("parent");
                $this.closest(parent).remove();
            }
        );

        // language flag select2
        $(".country-flag-select").select2({
            templateResult: countryCodeFlag,
            templateSelection: countryCodeFlag,
            escapeMarkup: function(m) {
                return m;
            },
        });

        function countryCodeFlag(state) {
            var flagName = $(state.element).data("flag");
            if (!flagName) return state.text;
            return (
                "<div class='d-flex align-items-center'><img class='flag me-2' src='" + flagName +
                "' height='14' />" + state.text + "</div>"
            );
        }
    })
</script>
