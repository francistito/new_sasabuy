@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@section('content')

    <div class="container">
        <div class="d-flex align-items-start">
            <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0">
                <div class="aiz-user-sidenav overflow-auto c-scrollbar-light px-4 pb-4">
                    <!-- Close button -->
                    <div class="d-xl-none">
                        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                            <i class="las la-times la-2x"></i>
                        </button>
                    </div>
                    <!-- Customer info -->
                    <div class="p-4 text-center mb-4 border-bottom position-relative">
                        <!-- Image -->
                        <span class="avatar avatar-md mb-3">
                                    <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/5XVyeLGw5zRpb63bqgn2dtIOjCktLgBltNSQIPG3.webp" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                            </span>
                        <!-- Name -->
                        <h4 class="h5 fs-14 mb-1 fw-700 text-dark">{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                        <!-- Phone -->
                        <!-- Email -->
                    </div>

                    <!-- Menus -->
                    <div class="sidemnenu">
                        <ul class="aiz-side-nav-list mb-3 pb-3 border-bottom metismenu" data-toggle="aiz-side-menu">

                            <!-- Dashboard -->
                            <li class="aiz-side-nav-item mm-active">
                                <a href="{{url('/home')}}" class="aiz-side-nav-link active" aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_24768" data-name="Group 24768" transform="translate(3495.144 -602)">
                                            <path id="Path_2916" data-name="Path 2916" d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z" transform="translate(-3495.144 602)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Dashboard</span>
                                </a>
                            </li>



                            <!-- Manage Profile -->
                            <li class="aiz-side-nav-item">
                                <a href="https://demo.activeitzone.com/ecommerce/profile" class="aiz-side-nav-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8094" data-name="Group 8094" transform="translate(3176 -602)">
                                            <path id="Path_2924" data-name="Path 2924" d="M331.144,0a4,4,0,1,0,4,4,4,4,0,0,0-4-4m0,7a3,3,0,1,1,3-3,3,3,0,0,1-3,3" transform="translate(-3499.144 602)" fill="#b5b5bf"></path>
                                            <path id="Path_2925" data-name="Path 2925" d="M332.144,20h-10a3,3,0,0,0,0,6h10a3,3,0,0,0,0-6m0,5h-10a2,2,0,0,1,0-4h10a2,2,0,0,1,0,4" transform="translate(-3495.144 592)" fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">Manage Profile</span>
                                </a>
                            </li>



                        </ul>

                        <!-- logout -->
                        <a href="{{url('/logout')}}" class="btn btn-primary btn-block fs-14 fw-700 mb-5 mb-md-0" style="border-radius: 25px;">Sign Out</a>
                    </div>

                </div>
            </div>
            <div class="aiz-user-panel">





            </div>
        </div>
    </div>

@endsection
