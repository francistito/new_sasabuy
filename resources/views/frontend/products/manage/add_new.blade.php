
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
                            <div class="row mb-4 g-4">

                                <!--left sidebar-->
                                <div class="col-xl-12 order-2 order-md-2 order-lg-2 order-xl-1">
                                    @include('frontend.products.manage.includes.add_form')
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

        @include('backend.pages.products.products.include.product_scripts')

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
