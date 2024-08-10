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
                   @include('backend.pages.products.products.include.add_form')
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


@include('backend.pages.products.products.include.product_scripts')
