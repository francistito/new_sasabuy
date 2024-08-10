
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

        .order-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table th,
        .order-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .order-table th {
            background-color: #f4f4f4;
        }

        .order-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
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
                <div class="dashboard-container">
                    <main class="main-content">
                        <section id="profile" class="dashboard-section">
                            <h2>User Profile</h2>
                            <div class="profile-info">
                                <p><strong>Name:</strong> {{$user->name}}</p>
                                <p><strong>Email:</strong>{{$user->email}}</p>
                                <p><strong>Joined:</strong> {{day_month_date_format($user->created_at)}}</p>
                            </div>
                        </section>

                    </main>
                </div>

            </div>
        </div>

        <!-- End Banner -->
        <!-- Deals-and-tabs -->

        <!-- End Deals-and-tabs -->
    </div>

    <div class="container">

        <!-- End Recently viewed -->
        <!-- Brand Carousel -->
        {{--        @include('frontend.includes.home_section.list_of_brands')--}}
        <!-- End Brand Carousel -->
    </div>

@endsection
