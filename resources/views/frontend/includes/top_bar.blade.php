<div class="top-navbar bg-white z-1035 h-35px h-sm-auto">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                    <!-- Language switcher -->
                    <li class="list-inline-item dropdown mr-4" id="lang-change">
                        <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                           data-toggle="dropdown" data-display="static">
                            <span class="">English</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li>
                                <a href="javascript:void(0)" data-flag="en"
                                   class="dropdown-item  active ">
                                    <img src="
                                    {{asset('assets/img/placeholder.jpg')}}"
                                         data-src="{{asset('assets/img/flags/en.png')}}"
                                         class="mr-1 lazyload" alt="English" height="11">
                                    <span class="language">English</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Currency Switcher -->
                    <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">

                        <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                           data-toggle="dropdown" data-display="static">
                            U.S. Dollar
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <li>
                                <a class="dropdown-item  active "
                                   href="javascript:void(0)"
                                   data-currency="USD">U.S. Dollar
                                    ($)</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

            <div class="col-6 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                    <!-- Become a Seller -->
{{--                    <li class="list-inline-item mr-0 pl-0 py-2">--}}
{{--                        <a href="https://demo.activeitzone.com/ecommerce/shops/create"--}}
{{--                           class="text-secondary fs-12 pr-3 d-inline-block border-width-2 border-right">Become a Seller !</a>--}}
{{--                    </li>--}}
                    <!-- Seller Login -->
                    <li class="list-inline-item mr-0 pl-0 py-2">
                        <a href="{{url('/login')}}"
                           class="text-secondary fs-12 pl-3 d-inline-block">Login to Seller</a>
                    </li>
                    <!-- Helpline -->
                    <li class="list-inline-item ml-3 pl-3 mr-0 pr-0">
                        <a href="tel:+255 (757) 888 110"
                           class="text-secondary fs-12 d-inline-block py-2">
                            <span>Helpline</span>
                            <span>+255 (757) 888 110</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
