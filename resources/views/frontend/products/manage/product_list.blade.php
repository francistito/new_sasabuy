
@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@push('after-styles')

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin: 10px 0;
        }

        .sidebar-menu a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: #575757;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .dashboard-section {
            margin-bottom: 40px;
        }

        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 10px 0;
        }

        .order-table, .product-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table th, .order-table td,
        .product-table th, .product-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .order-table th, .product-table th {
            background-color: #f4f4f4;
        }

        .order-table tbody tr:nth-child(even), .product-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .product-form {
            margin-bottom: 20px;
        }

        .product-form h3 {
            margin-bottom: 10px;
        }

        .product-form form {
            display: flex;
            flex-direction: column;
        }

        .product-form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .product-form input, .product-form textarea {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .product-form button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .product-form button:hover {
            background-color: #575757;
        }

        .product-list {
            margin-top: 20px;
        }

        .product-list h3 {
            margin-bottom: 10px;
        }

        .product-table img {
            max-width: 50px;
        }

        .product-table button {
            padding: 5px 10px;
            margin-right: 5px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .product-table button:hover {
            background-color: #575757;
        }
    </style>
@endpush
@section('content')



    <!-- End Slider Section -->
    <div class="container">
        <!-- Banner -->

        <div class="row">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                    <!-- List -->
                    @include('frontend.includes.dashbiard.aside')

                    <!-- End List -->
                </div>
            </div>
            <div class="col-xl-9 col-wd-9gdot5">
                <!-- Single Product Body -->
                <main class="main-content">
                    <section class="tt-section pt-4">
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="card tt-page-header">
                                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                                            <div class="tt-page-title">
                                                <h2 class="h5 mb-lg-0">{{ ('Products') }}</h2>
                                            </div>
                                            <div class="tt-action">
                                                {{--                                @can('add_products')--}}
                                                <a href="{{ route('dashboard.add_product') }}" class="btn btn-primary" style="color: #ffffff"><i
                                                        data-feather="plus"></i> {{ ('Add Product') }}</a>
                                                {{--                                @endcan--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="card mb-4" id="section-1">

                                        <table class="table tt-footable border-top" data-use-parent-width="true">
                                            <thead>
                                            <tr>
                                                <th class="text-center">{{ ('S/L') }}
                                                </th>
                                                <th data-breakpoints="xs sm">{{ ('Image') }}</th>

                                                <th>{{ ('Product Name') }}</th>
{{--                                                <th data-breakpoints="xs sm">{{ ('Categories') }}</th>--}}
                                                <th data-breakpoints="xs sm">{{ ('Price') }}</th>
                                                <th data-breakpoints="xs sm md">{{ ('Published') }}</th>
                                                <th data-breakpoints="xs sm md" class="text-end">{{ ('Action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($products as $key => $product)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $key + 1 }}</td>

                                                    <td class="text-center">
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle"
                                                                 src="{{ url(product_image($product)) }}" alt=""
                                                                 onerror="this.onerror=null;this.src='{{ asset('backend/assets/img/placeholder-thumb.png') }}';"  style="width: 40px" />
                                                        </div></td>
                                                    <td>
                                                        <a href="{{ route('product.show', $product->slug) }}"
                                                           class="d-flex align-items-center" target="_blank">

                                                            <h6 class="fs-sm mb-0 ms-2">{{ $product->collectLocalization('name') }}
                                                            </h6>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="tt-tb-price fs-sm fw-bold">
                                                <span class="text-accent">
                                                    @if ($product->max_price != $product->min_price)
                                                        {{ formatPrice($product->min_price) }}
                                                        -
                                                        {{ formatPrice($product->max_price) }}
                                                    @else
                                                        {{ formatPrice($product->min_price) }}
                                                    @endif
                                                </span>
                                                        </div>
                                                    </td>


                                                    <td>
{{--                                                        @can('publish_products')--}}
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" onchange="updatePublishedStatus(this)"
                                                                       class="form-check-input"
                                                                       @if ($product->is_published) checked @endif
                                                                       value="{{ $product->id }}">
                                                            </div>
{{--                                                        @endcan--}}

                                                    </td>
                                                    <td class="text-end">
                                                        <a class="btn btn-primary btn-xs"
                                                           href="{{ route('dashboard.edit_product', ['slug' => $product->slug, 'lang_key' => env('DEFAULT_LANGUAGE')]) }}&" style="color: white">
                                                            <i data-feather="edit-3" class="me-2"></i>{{ ('Edit') }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!--pagination start-->
                                        <div class="d-flex align-items-center justify-content-between px-4 pb-4">
                            <span>
                                {{ ('Showing') }}
{{--                                {{ $products->firstItem() }}-{{ $products->lastItem() }} {{ ('of') }}--}}
{{--                                {{ $products->total() }} {{ ('results') }}--}}

                            </span>
                                            <nav>
{{--                                                {{ $products->appends(request()->input())->links() }}--}}
                                            </nav>
                                        </div>
                                        <!--pagination end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            </div>
        </div>

        </div>
        <!-- End Banner -->
        <!-- Deals-and-tabs -->

        <!-- End Deals-and-tabs -->

    <div class="container">

        <!-- End Recently viewed -->
        <!-- Brand Carousel -->
        {{--        @include('frontend.includes.home_section.list_of_brands')--}}
        <!-- End Brand Carousel -->
    </div>

    @push('after-scripts')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabButtons = document.querySelectorAll('.tab-button');
                const tabContents = document.querySelectorAll('.tab-content');

                tabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const tab = button.getAttribute('data-tab');

                        tabButtons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');

                        tabContents.forEach(content => {
                            content.classList.remove('active');
                            if (content.getAttribute('id') === tab) {
                                content.classList.add('active');
                            }
                        });
                    });
                });
            });
        </script>
    @endpush
@endsection
