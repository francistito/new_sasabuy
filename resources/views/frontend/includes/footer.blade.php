<!-- footer subscription & icons -->
<section class="py-3 text-light footer-widget border-bottom" style="border-color: #3d3d46 !important; background-color: #212129 !important;">
    <div class="container">
        <!-- footer logo -->
        <div class="row">
            <!-- about & subscription -->
            <div class="col-xl-6 col-lg-7">
                <div class="mt-3 mb-4">
                    <a href="{{url('/')}}" class="d-block">
                        <img class="lazyload h-45px" src="{{asset('assets/img/sasab.png')}}" data-src="{{asset('assets/img/sasab.png')}}" alt="Active eCommerce CMS" height="45">
                    </a>
                </div>
                <div class="mb-4 text-secondary text-justify">
                    <span style="">Complete system for your eCommerce business</span>
                </div>
                <div class="mb-3">
{{--                    <form method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">--}}
{{--                        <input type="hidden" name="_token" value="mQKitohuD7H7LCiy18pKm0W2qRfSfROkb2tIsfEf">                        <div class="row gutters-10">--}}
{{--                            <div class="col-8">--}}
{{--                                <input type="email" class="form-control border-secondary rounded-0 text-white w-100 bg-transparent" placeholder="Your Email Address" name="email" required>--}}
{{--                            </div>--}}
{{--                            <div class="col-4">--}}
{{--                                <button type="submit" class="btn btn-primary rounded-0 w-100">Subscribe</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>

            <div class="col d-none d-lg-block"></div>

            <!-- Follow & Apps -->
            <div class="col-xxl-3 col-xl-4 col-lg-4">
                <!-- Social -->
                <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3 mt-lg-0">Follow Us</h5>
                <ul class="list-inline social colored mb-4">
                    <li class="list-inline-item ml-2 mr-2">
                        <a href="https://facebook.com/" target="_blank"
                           class="facebook"><i class="lab la-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item ml-2 mr-2">
                        <a href="https://twitter.com/" target="_blank"
                           class="twitter"><i class="lab la-twitter"></i></a>
                    </li>
                    <li class="list-inline-item ml-2 mr-2">
                        <a href="https://www.instagram.com/" target="_blank"
                           class="instagram"><i class="lab la-instagram"></i></a>
                    </li>
                    <li class="list-inline-item ml-2 mr-2">
                        <a href="https://youtube.com/" target="_blank"
                           class="youtube"><i class="lab la-youtube"></i></a>
                    </li>
                    <li class="list-inline-item ml-2 mr-2">
                        <a href="https://linkedin.com/" target="_blank"
                           class="linkedin"><i class="lab la-linkedin-in"></i></a>
                    </li>
                </ul>

                <!-- Apps link -->
                <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3">Mobile Apps</h5>
                <div class="d-flex mt-3">
                    <div class="">
                        <a href="https://play.google.com/store/apps" target="_blank" class="mr-2 mb-2 overflow-hidden hov-scale-img">
                            <img class="lazyload has-transition" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/play.png" alt="Active eCommerce CMS" height="44">
                        </a>
                    </div>
                    <div class="">
                        <a href="https://www.apple.com/app-store/" target="_blank" class="overflow-hidden hov-scale-img">
                            <img class="lazyload has-transition" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder-rect.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/assets/img/app.png" alt="Active eCommerce CMS" height="44">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-black text-soft-light">
    <div class="container">
        <div class="row align-items-center py-3">
            <!-- Copyright -->
            <div class="col-lg-6 order-1 order-lg-0">
                <div class="text-center text-lg-left fs-14" current-verison="8.8">
                    SASABUY {{\Carbon\Carbon::today()->format('Y')}}
                </div>
            </div>

            <!-- Payment Method Images -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/NankP5emHOKcdCWqX6Bks1Qa63iDgoLA6WPGn7oe.webp" height="20" class="mw-100 h-auto" style="max-height: 20px" alt="Payment method">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

