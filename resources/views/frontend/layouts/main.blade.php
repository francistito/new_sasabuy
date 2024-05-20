
<!DOCTYPE html>


<html lang="en">

<head>

    <meta name="csrf-token" content="mQKitohuD7H7LCiy18pKm0W2qRfSfROkb2tIsfEf">


    <title>SASABUY | SELLING AND BUYING THINGS </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="selling and buying used things" />
    <meta name="keywords" content="">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/vendors.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom-style.css')}}">








</head>
<body>
<!-- aiz-main-wrapper -->
<div class="aiz-main-wrapper d-flex flex-column bg-white">
    <!-- Header -->
    <!-- Top Bar Banner -->
    {{--    @include('frontend.includes.top_banner')--}}

    <!-- Top Bar -->
    @include('frontend.includes.top_bar')


    @include('frontend.includes.header')

    <!-- Top Menu Sidebar -->
    @include('frontend.includes.top_menu_sidebar')

    <!-- Modal -->
    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>


    <style>
        @media (max-width: 767px){
            #flash_deal .flash-deals-baner{
                height: 203px !important;
            }
        }
    </style>
    <!-- Featured Categories -->
    <!-- Sliders -->
    {{--    @include('frontend.includes.home_section.sliders')--}}
    @yield('content')



    <!-- footer -->
    <!-- Last Viewed Products  -->
    @include('frontend.includes.footer')

</div>

<!-- cookies popup -->


<!-- website popup -->


@include('frontend.includes.modals')

<!-- SCRIPTS -->
<script src="{{url('/assets/js/vendors.js')}}"></script>
<script src="{{url('/assets/js/aiz-core.js?v=8953')}}"></script>

</body>
</html>
