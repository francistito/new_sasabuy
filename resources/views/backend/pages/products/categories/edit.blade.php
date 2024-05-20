@extends('backend.layouts.master')

@section('title')
    {{  ('Update Category') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection


@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto flex-grow-1">
                                    <div class="tt-page-title">
                                        <h2 class="h5 mb-0">{{  ('Update Category') }} <sup
                                                class="badge bg-soft-warning px-2">{{ $lang_key }}</sup></h2>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <select id="language" class="w-100 form-control text-capitalize country-flag-select"
                                        data-toggle="select2" onchange=" Data(this.value)">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <option value="{{ $language->code }}"
                                                {{ $lang_key == $language->code ? 'selected' : '' }}
                                                data-flag="{{ asset('backend/assets/img/flags/' . $language->flag . '.png') }}">
                                                {{ $language->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 g-4">

                <!--left sidebar-->
                <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                    <form action="{{ route('admin.categories.update') }}" method="POST" class="pb-650" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <input type="hidden" name="lang_key" value="{{ $lang_key }}">
                        <!--basic information start-->
                        <div class="card mb-4" id="section-1">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Basic Information') }}</h5>

                                <div class="mb-4">
                                    <label for="name" class="form-label">{{  ('Category Name') }}</label>
                                    <input class="form-control" type="text" id="name"
                                        placeholder="{{  ('Type your category name') }}" name="name" required
                                        value="{{ $category->collectLocalization('name') }}">
                                </div>


                                @if (env('DEFAULT_LANGUAGE') == $lang_key)
                                    <div class="mb-4">
                                        <label for="parent_id" class="form-label">{{  ('Base Category') }}</label>
                                        <select class="form-control select2" name="parent_id" class="w-100"
                                            data-toggle="select2">
                                            <option value="0" {{ $category->parent_id == 0 ? 'selected' : '' }}>᎗
                                            </option>
                                            @foreach ($categories as $acategory)
                                                <option value="{{ $acategory->id }}"
                                                    {{ $acategory->id == $category->parent_id ? 'selected' : '' }}>
                                                    {{ $acategory->name }}
                                                </option>
                                                @foreach ($acategory->childrenCategories()->orderBy('sorting_order_level', 'desc')->where('id', '!=', $category->id)->get() as $childCategory)
                                                    @include(
                                                        'backend.pages.products.categories.subCategory',
                                                        ['subCategory' => $childCategory]
                                                    )
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-4">

                                        @php
                                            $categoryBrands = $category->brands()->pluck('brand_id');
                                        @endphp

                                        <label class="form-label">{{  ('Brands') }}</label>
                                        <select class="form-control select2" name="brand_ids[]" class="w-100"
                                            data-toggle="select2" data-placeholder="{{  ('Select brands') }}"
                                            multiple>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ $categoryBrands->contains($brand->id) ? 'selected' : '' }}>
                                                    {{ $brand->collectLocalization('name') }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="sorting_order_level"
                                            class="form-label">{{  ('Sorting Priority Number') }}</label>
                                        <input class="form-control" type="number" id="sorting_order_level"
                                            placeholder="{{  ('Type sorting priority number') }}"
                                            name="sorting_order_level" value="{{ $category->sorting_order_level }}">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!--basic information end-->

                        <!--product image and gallery start-->
                        <div class="card mb-4" id="section-2">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('Images') }}</h5>
                                <div class="mb-4">
                                    <label class="form-label">{{  ('Thumbnail') }}</label>
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">{{  ('Choose Category Thumbnail') }}</span>
                                        <!-- choose media -->
                                        <div class="tt-product-thumb show-selected-files mt-3">

                                            <input type="file" name="image">
{{--                                            <div class="avatar avatar-xl cursor-pointer choose-media"--}}
{{--                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"--}}
{{--                                                onclick="showMediaManager(this)" data-selection="single">--}}
{{--                                                <input  name="image"--}}
{{--                                                    value="{{ $category->collectLocalization('thumbnail_image', $lang_key) }}">--}}
{{--                                                <div class="no-avatar rounded-circle">--}}
{{--                                                    <span><i data-feather="plus"></i></span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                        <!-- choose media -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--product image and gallery end-->

                        <!--seo meta description start-->
                        <div class="card mb-4" id="section-10">
                            <div class="card-body">
                                <h5 class="mb-4">{{  ('SEO Meta Configuration') }}</h5>

                                <div class="mb-4">
                                    <label for="meta_title" class="form-label">{{  ('Meta Title') }}</label>
                                    <input type="text" name="meta_title" id="meta_title"
                                        placeholder="{{  ('Type meta title') }}" class="form-control"
                                        value="{{ $category->collectLocalization('meta_title', $lang_key) }}">
                                    <span class="fs-sm text-muted">
                                        {{  ('Set a meta tag title. Recommended to be simple and unique.') }}
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <label for="meta_description"
                                        class="form-label">{{  ('Meta Description') }}</label>
                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="4"
                                        placeholder="{{  ('Type your meta description') }}">{{ $category->collectLocalization('meta_description', $lang_key) }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">{{  ('Meta Image') }}</label>
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">{{  ('Choose Meta Image') }}</span>
                                        <!-- choose media -->
                                        <div class="tt-product-thumb show-selected-files mt-3">
                                            <div class="avatar avatar-xl cursor-pointer choose-media"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                                onclick="showMediaManager(this)" data-selection="single">
                                                <input type="hidden" name="meta_image"
                                                    value="{{ $category->collectLocalization('meta_image', $lang_key) }}">
                                                <div class="no-avatar rounded-circle">
                                                    <span><i data-feather="plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- choose media -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--seo meta description end-->

                        <!-- submit button -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <button class="btn btn-primary" type="submit">
                                        <i data-feather="save" class="me-1"></i> {{  ('Save Changes') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- submit button end -->

                    </form>
                </div>

                <!--right sidebar-->
                <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                    <div class="card tt-sticky-sidebar d-none d-xl-block">
                        <div class="card-body">
                            <h5 class="mb-4">{{  ('Category Information') }}</h5>
                            <div class="tt-vertical-step">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#section-1" class="active">{{  ('Basic Information') }}</a>
                                    </li>
                                    <li>
                                        <a href="#section-2">{{  ('Category Image') }}</a>
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


@section('scripts')
    <script>
        "use strict";

        // runs when the document is ready --> for media files
        $(document).ready(function() {
            getChosenFilesCount();
            showSelectedFilePreviewOnLoad();
        });
    </script>
@endsection
