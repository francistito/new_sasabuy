<header class=" sticky-top  z-1020 bg-white">
    <!-- Search Bar -->
    <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025">
        <div class="container">
            <div class="d-flex align-items-center">
                <!-- top menu sidebar button -->
                <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active" data-toggle="class-toggle"
                        data-target=".aiz-top-menu-sidebar">
                    <svg id="Component_43_1" data-name="Component 43 – 1" xmlns="http://www.w3.org/2000/svg"
                         width="16" height="16" viewBox="0 0 16 16">
                        <rect id="Rectangle_19062" data-name="Rectangle 19062" width="16" height="2"
                              transform="translate(0 7)" fill="#919199"/>
                        <rect id="Rectangle_19063" data-name="Rectangle 19063" width="16" height="2"
                              fill="#919199"/>
                        <rect id="Rectangle_19064" data-name="Rectangle 19064" width="16" height="2"
                              transform="translate(0 14)" fill="#919199"/>
                    </svg>

                </button>
                <!-- Header Logo -->
                <div class="col-auto pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="{{url('/')}}">
                        <img
                            src="{{asset('assets/img/sasab.png')}}"
                            alt="Active eCommerce CMS"
                            class="mw-100 h-30px h-md-40px" height="40">
                    </a>
                </div>
                <!-- Search Icon for small device -->
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                       data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>
                <!-- Search field -->
                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white mx-xl-5">
                    <div class="position-relative flex-grow-1 px-3 px-lg-0">
                        <form action="{{url('/')}}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle"
                                     data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i
                                            class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="search-input-box">
                                    <input type="text"
                                           class="border border-soft-light form-control fs-14 hov-animate-outline"
                                           id="search" name="keyword"
                                           placeholder="I am shopping for..." autocomplete="off">

                                    <svg id="Group_723" data-name="Group 723" xmlns="http://www.w3.org/2000/svg"
                                         width="20.001" height="20" viewBox="0 0 20.001 20">
                                        <path id="Path_3090" data-name="Path 3090"
                                              d="M9.847,17.839a7.993,7.993,0,1,1,7.993-7.993A8,8,0,0,1,9.847,17.839Zm0-14.387a6.394,6.394,0,1,0,6.394,6.394A6.4,6.4,0,0,0,9.847,3.453Z"
                                              transform="translate(-1.854 -1.854)" fill="#b5b5bf"/>
                                        <path id="Path_3091" data-name="Path 3091"
                                              d="M24.4,25.2a.8.8,0,0,1-.565-.234l-6.15-6.15a.8.8,0,0,1,1.13-1.13l6.15,6.15A.8.8,0,0,1,24.4,25.2Z"
                                              transform="translate(-5.2 -5.2)" fill="#b5b5bf"/>
                                    </svg>
                                </div>
                            </div>
                        </form>
                        <div
                            class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                            style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search box -->
                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>
                <!-- Compare -->

                @guest()
                    <div class="d-none d-xl-block ml-auto mr-0">
                        <!--Login & Registration -->
                        <span class="d-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                         viewBox="0 0 19.902 20.012">
                                        <path id="fe2df171891038b33e9624c27e96e367"
                                              d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                              transform="translate(-2.064 -1.995)" fill="#91919b"/>
                                    </svg>
                                </span>
                                <a href="{{url('/login')}}"
                                   class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                                <a href="{{url('/register')}}"
                                   class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                            </span>
                    </div>
                @endguest

                @auth()
                    <div class="d-none d-xl-block ml-auto mr-0">
                                                    <span class="d-flex align-items-center nav-user-info py-20px "
                                                          id="nav-user-info">
                                <!-- Image -->
                                <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                                                            <img src="https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png"
                                                                                class="img-fit h-100" alt="Avatar"
                                                                                onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                                                                    </span>
                                                        <!-- Name -->
                                <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                            </span>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Loged in user Menus -->
        @auth()
            <div class="hover-user-top-menu position-absolute top-100 left-0 right-0 z-3">
                <div class="container">
                    <div class="position-static float-right">
                        <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm" style="width:220px;">
                            <ul class="list-unstyled no-scrollbar mb-0 text-left">
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{url('/')}}"
                                       class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 16 16">
                                            <path id="Path_2916" data-name="Path 2916"
                                                  d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                  fill="#b5b5c0"/>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">Dashboard</span>
                                    </a>
                                </li>

                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{url('/logout')}}"
                                       class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                             viewBox="0 0 16 15.999">
                                            <g id="Group_25503" data-name="Group 25503"
                                               transform="translate(-24.002 -377)">
                                                <g id="Group_25265" data-name="Group 25265"
                                                   transform="translate(-216.534 -160)">
                                                    <path id="Subtraction_192" data-name="Subtraction 192"
                                                          d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                          transform="translate(-11803.999 -2367)" fill="#d43533"/>
                                                </g>
                                                <rect id="Rectangle_19022" data-name="Rectangle 19022" width="1"
                                                      height="8" rx="0.5" transform="translate(31.5 377)"
                                                      fill="#d43533"/>
                                            </g>
                                        </svg>
                                        <span
                                            class="user-top-menu-name text-primary has-transition ml-3">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>

    <!-- Menu Bar -->
    <div class="d-none d-lg-block position-relative bg-primary h-50px">
        <div class="container h-100">
            <div class="d-flex h-100">
                <!-- Categoty Menu Button -->
                <div class="d-none d-xl-block all-category has-transition bg-black-10" id="category-menu-bar">
                    {{--                    <div class="px-3 h-100"--}}
                    {{--                         style="padding-top: 12px;padding-bottom: 12px; width:270px; cursor: pointer;">--}}
                    {{--                        <div class="d-flex align-items-center justify-content-between">--}}
                    {{--                            <div>--}}
                    {{--                                <span class="fw-700 fs-16 text-white mr-3">Categories</span>--}}
                    {{--                                <a href="https://demo.activeitzone.com/ecommerce/categories" class="text-reset">--}}
                    {{--                                        <span--}}
                    {{--                                            class="d-none d-lg-inline-block text-white hov-opacity-80">(See All)</span>--}}
                    {{--                                </a>--}}
                    {{--                            </div>--}}
                    {{--                            <i class="las la-angle-down text-white has-transition" id="category-menu-bar-icon"--}}
                    {{--                               style="font-size: 1.2rem !important"></i>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <!-- Header Menus -->
                <div class="ml-xl-4 w-100 overflow-hidden">
                </div>
                <!-- Cart -->
                <div class="d-none d-xl-block align-self-stretch ml-5 mr-0 has-transition bg-black-10"
                     data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items" style="width: max-content;">
                        <!-- Cart button with cart count -->
                        <a href="javascript:void(0)" class="d-flex align-items-center text-dark px-3 h-100"
                           data-toggle="dropdown" data-display="static" title="Cart">
    <span class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.562" viewBox="0 0 24 20.562">
            <g id="_5e67fc94b53aaec8ca181b806dd815ee" data-name="5e67fc94b53aaec8ca181b806dd815ee"
               transform="translate(-33.276 -101)">
              <path id="Path_32659" data-name="Path 32659"
                    d="M34.034,102.519H38.2l-.732-.557c.122.37.243.739.365,1.112q.441,1.333.879,2.666.528,1.6,1.058,3.211.46,1.394.917,2.788c.149.451.291.9.446,1.352l.008.02a.76.76,0,0,0,1.466-.4c-.122-.37-.243-.739-.365-1.112q-.441-1.333-.879-2.666-.528-1.607-1.058-3.213-.46-1.394-.917-2.788c-.149-.451-.289-.9-.446-1.352l-.008-.02a.783.783,0,0,0-.732-.557H34.037a.76.76,0,0,0,0,1.519Z"
                    fill="#fff"/>
              <path id="Path_32660" data-name="Path 32660"
                    d="M288.931,541.934q-.615,1.1-1.233,2.193c-.058.106-.119.21-.177.317a.767.767,0,0,0,.656,1.142h11.6c.534,0,1.071.01,1.608,0h.023a.76.76,0,0,0,0-1.519h-11.6c-.534,0-1.074-.015-1.608,0h-.023l.656,1.142q.615-1.1,1.233-2.193c.058-.106.119-.21.177-.316a.759.759,0,0,0-1.312-.765Z"
                    transform="translate(-247.711 -429.41)" fill="#fff"/>
              <circle id="Ellipse_553" data-name="Ellipse 553" cx="1.724" cy="1.724" r="1.724"
                      transform="translate(49.612 117.606)" fill="#fff"/>
              <path id="Path_32661" data-name="Path 32661"
                    d="M658.4,739.2a2.267,2.267,0,0,0,1.489,2.1,2.232,2.232,0,0,0,2.433-.648A2.231,2.231,0,1,0,658.4,739.2a.506.506,0,0,0,1.013,0c0-.041,0-.084.005-.124a.381.381,0,0,1,.005-.053c.008-.1,0,.033-.005.03a.979.979,0,0,1,.061-.248c.008-.02.023-.106.04-.111s-.046.094-.018.043a.656.656,0,0,0,.028-.061,2.3,2.3,0,0,1,.129-.215c.048-.073-.068.078.013-.015.025-.028.051-.058.078-.086s.056-.056.084-.081l.038-.033c.018-.015.091-.051.025-.023s-.015.013,0,0,.035-.025.056-.038a.947.947,0,0,1,.086-.051c.038-.023.078-.041.119-.061.013-.008.066-.033,0,0s.025-.008.033-.01A1.56,1.56,0,0,1,660.4,738l.068-.013c.056-.013-.048.005-.048.005.046,0,.094-.01.139-.01a2.043,2.043,0,0,1,.248.008c.094.008-.1-.018.02.005.046.008.089.02.134.03s.076.023.114.035a.589.589,0,0,1,.063.023c0,.008-.094-.048-.043-.018.071.043.149.076.22.122.018.013.035.025.056.038s.056.023,0,0-.018-.015,0,0l.051.043a2.274,2.274,0,0,1,.172.177c.076.084-.035-.058.013.015.02.033.043.063.063.1s.041.068.058.1l.023.046c.048.091.01-.008,0-.013.03.01.063.192.073.225l.023.1c.02.1,0-.03,0-.033.013.013.008.071.008.086a1.749,1.749,0,0,1,0,.23.63.63,0,0,0-.005.071c0,.051-.03.043.005-.03a.791.791,0,0,0-.028.134c-.018.071-.046.139-.066.21s.046-.086.013-.028a.245.245,0,0,0-.02.046c-.02.041-.041.078-.063.117s-.041.066-.063.1c-.068.1.048-.051-.01.018a1.932,1.932,0,0,1-.172.18c-.01.01-.071.076-.089.076,0,0,.1-.071.023-.02-.015.01-.028.018-.041.028-.071.046-.144.084-.218.122s.091-.03-.018.008l-.111.038-.116.03c-.018,0-.033.008-.051.01-.111.025.081-.005.015,0a2.045,2.045,0,0,1-.248.01c-.041,0-.081-.005-.124-.008-.015,0-.076-.008,0,0s-.018-.005-.035-.008a1.912,1.912,0,0,1-.261-.076c-.015-.005-.066-.03,0,0s-.015-.008-.03-.015c-.041-.02-.078-.041-.117-.063s-.073-.048-.111-.073c-.061-.038.008.02.023.02-.01,0-.043-.035-.051-.043a1.872,1.872,0,0,1-.187-.187.3.3,0,0,1-.043-.051c0,.01.061.086.02.023-.025-.038-.051-.073-.073-.111s-.048-.089-.071-.132c-.053-.1.025.081-.015-.033a1.836,1.836,0,0,1-.073-.263.163.163,0,0,0-.01-.051c.038.084.008.071,0,.013s-.008-.106-.008-.16a.513.513,0,0,0-1.026,0Z"
                    transform="translate(-609.293 -619.872)" fill="#fff"/>
              <circle id="Ellipse_554" data-name="Ellipse 554" cx="1.724" cy="1.724" r="1.724"
                      transform="translate(40.884 117.606)" fill="#fff"/>
              <path id="Path_32662" data-name="Path 32662"
                    d="M270.814,272.355a2.267,2.267,0,0,0,1.489,2.1,2.232,2.232,0,0,0,2.433-.648,2.231,2.231,0,1,0-3.922-1.453.506.506,0,0,0,1.013,0c0-.041,0-.084.005-.124a.377.377,0,0,1,.005-.053c.008-.1,0,.033-.005.03a.981.981,0,0,1,.061-.248c.008-.02.023-.106.04-.111s-.046.094-.018.043a.656.656,0,0,0,.028-.061,2.3,2.3,0,0,1,.129-.215c.048-.073-.068.079.013-.015.025-.028.051-.058.078-.086s.056-.056.084-.081l.038-.033c.018-.015.091-.051.025-.023s-.015.013,0,0,.035-.025.056-.038a.96.96,0,0,1,.086-.051c.038-.023.078-.04.119-.061.013-.008.066-.033,0,0s.025-.008.033-.01a1.564,1.564,0,0,1,.213-.061l.068-.013c.056-.013-.048.005-.048.005.046,0,.094-.01.139-.01a2.031,2.031,0,0,1,.248.008c.094.008-.1-.018.02.005.046.008.089.02.134.03s.076.023.114.035a.583.583,0,0,1,.063.023c0,.008-.094-.048-.043-.018.071.043.149.076.22.122.018.013.035.025.056.038s.056.023,0,0-.018-.015,0,0l.051.043a2.257,2.257,0,0,1,.172.177c.076.084-.035-.058.013.015.02.033.043.063.063.1s.04.068.058.1l.023.046c.048.091.01-.008,0-.013.03.01.063.192.073.225l.023.1c.02.1,0-.03,0-.033.013.013.008.071.008.086a1.749,1.749,0,0,1,0,.23.622.622,0,0,0-.005.071c0,.051-.03.043.005-.03a.788.788,0,0,0-.028.134c-.018.071-.046.139-.066.21s.046-.086.013-.028a.249.249,0,0,0-.02.046c-.02.04-.041.078-.063.116s-.041.066-.063.1c-.068.1.048-.051-.01.018a1.929,1.929,0,0,1-.172.18c-.01.01-.071.076-.089.076,0,0,.1-.071.023-.02-.015.01-.028.018-.041.028-.071.046-.144.084-.218.122s.091-.03-.018.008l-.111.038-.116.03c-.018,0-.033.008-.051.01-.111.025.081-.005.015,0a2.039,2.039,0,0,1-.248.01c-.041,0-.081-.005-.124-.008-.015,0-.076-.008,0,0s-.018-.005-.035-.008a1.919,1.919,0,0,1-.261-.076c-.015-.005-.066-.03,0,0s-.015-.008-.03-.015c-.04-.02-.078-.04-.116-.063s-.073-.048-.111-.073c-.061-.038.008.02.023.02-.01,0-.043-.035-.051-.043a1.873,1.873,0,0,1-.187-.187.3.3,0,0,1-.043-.051c0,.01.061.086.02.023-.025-.038-.051-.073-.073-.111s-.048-.089-.071-.132c-.053-.1.025.081-.015-.033a1.84,1.84,0,0,1-.073-.263.164.164,0,0,0-.01-.051c.038.084.008.071,0,.013s-.008-.106-.008-.16a.513.513,0,0,0-1.026,0ZM287.2,258l-3.074,7.926H272.313L269.7,258Z"
                    transform="translate(-230.437 -153.024)" fill="#fff"/>
              <path id="Path_32663" data-name="Path 32663"
                    d="M267.044,237.988q-.52,1.341-1.038,2.682-.828,2.138-1.654,4.274l-.38.983.489-.372H254.1c-.476,0-.957-.02-1.436,0h-.02l.489.372q-.444-1.348-.886-2.694-.7-2.131-1.4-4.264c-.109-.327-.215-.653-.324-.983l-.489.641h16.791c.228,0,.456.005.681,0h.03a.506.506,0,0,0,0-1.013H250.744c-.228,0-.456-.005-.681,0h-.03a.511.511,0,0,0-.489.641q.444,1.348.886,2.694.7,2.131,1.4,4.264c.109.327.215.653.324.983a.523.523,0,0,0,.489.372h10.359c.476,0,.957.018,1.436,0h.02a.526.526,0,0,0,.489-.372q.52-1.341,1.038-2.682.828-2.138,1.654-4.274l.38-.983a.508.508,0,0,0-.355-.623A.52.52,0,0,0,267.044,237.988Z"
                    transform="translate(-210.769 -133.152)" fill="#fff"/>
            </g>
        </svg>
    </span>
                            <span class="d-none d-xl-block ml-2 fs-14 fw-700 text-white">$0.000</span>
                            <span class="nav-box-text d-none d-xl-block ml-2 text-white fs-12">

        (<span class="cart-count">0</span> Items)

    </span>
                        </a>

                        <!-- Cart Items -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation rounded-0">
                            <div class="text-center p-3">
                                <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                <h3 class="h6 fw-700">Your Cart is empty</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categoty Menus -->
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 z-3 d-none"
             id="click-category-menu">
            <div class="container">
                <div class="d-flex position-relative">
                    <div class="position-static">
                        <div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar"
                             style="width:270px;">
                            <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
                                <li class="category-nav-element border border-top-0" data-id="1">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/women-clothing-fashion"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/46v0RI8PXlQa4Yy0IftaGaK9rZUQdLOAFkpnjRXT.webp"
                                             width="16" alt="Women Clothing &amp; Fashion"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Women Clothing &amp; Fashion</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="2">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/men-clothing-fashion"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/LHUk7AM6okO07NvMOkVB35JbQBCLGLjfbRBuUNHc.webp"
                                             width="16" alt="Men Clothing &amp; Fashion"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Men Clothing &amp; Fashion</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="3">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/computer-accessories"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/kTwoR2hUnTf1y6kAOmt9FUidF6Qo8IK0RkvGVMbi.webp"
                                             width="16" alt="Computer &amp; Accessories"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Computer &amp; Accessories</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="4">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/automobile-motorcycle"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/vafdWTltz6NGVOA2BOaSC3Y7PPFmxmSHX6KBhn4Z.webp"
                                             width="16" alt="Automobile &amp; Motorcycle"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Automobile &amp; Motorcycle</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="5">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/kids-toy"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/7Hpz9FWvKRNENKEXd13gqNPlFxz8LFJgCTFzlZbR.webp"
                                             width="16" alt="Kids &amp; toy"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Kids &amp; toy</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="6">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/sports-outdoor"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/jNdturV05yXj1UsPHurYFoJs410G39D5C2bnPGor.webp"
                                             width="16" alt="Sports &amp; outdoor"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Sports &amp; outdoor</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="7">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/jewelry-watches"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/R6AnVQNPd89NvPZelfi4F8rfkbFIiu8XteN74BFz.webp"
                                             width="16" alt="Jewelry &amp; Watches"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Jewelry &amp; Watches</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="8">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/cellphones-tabs"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/JjUx7LIwj97wFpsgffYGwYxtdEiQLVGPtBWYE4wq.webp"
                                             width="16" alt="Cellphones &amp; Tabs"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Cellphones &amp; Tabs</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="9">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/beauty-health-hair"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/KHQpABDau3b7oMyDFNSJYSMgprsQ1Kq5uij9fw3U.webp"
                                             width="16" alt="Beauty, Health &amp; Hair"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Beauty, Health &amp; Hair</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                                <li class="category-nav-element border border-top-0" data-id="10">
                                    <a href="https://demo.activeitzone.com/ecommerce/category/home-improvement-tools"
                                       class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                             src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg"
                                             data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/9hMfQOGGQrpmFO1KEbTJ9SijUxM8p8TEsm6o4FVp.webp"
                                             width="16" alt="Home Improvement &amp; Tools"
                                             onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        <span class="cat-name has-transition">Home Improvement &amp; Tools</span>
                                    </a>

                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                        <div class="c-preloader text-center absolute-center">
                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
