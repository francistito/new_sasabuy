<section class="mb-2 mb-md-3 mt-2 mt-md-3">
    <div class="container">
        <div class="bg-white">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="">Featured Categories</span>
                </h3>
                <!-- Links -->
                <div class="d-flex">
                    <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                       href="{{url('/')}}">View All Categories</a>
                </div>
            </div>
        </div>
        <!-- Categories -->
        <div class="bg-white px-3">
            <div class="row border-top border-right">

                @foreach($categories as $category)
                    <div class="col-xl-4 col-md-6 border-left border-bottom py-3 py-md-2rem">
                        <div class="d-sm-flex text-center text-sm-left">
{{--                            <div class="mb-3">--}}
{{--                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/nZI9U43Qh0eGER5tcaWbQ9y2yJzHhFmK2edZ4T0R.webp"--}}
{{--                                     class="lazyload w-150px h-auto mx-auto has-transition"--}}
{{--                                     alt="Women Clothing &amp; Fashion"--}}
{{--                                     onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">--}}
{{--                            </div>--}}
                            <div class="px-2 px-lg-4">
                                <h6 class="text-dark mb-0 text-truncate-2">
                                    <a class="text-reset fw-700 fs-14 hov-text-primary"
                                       href="{{url('/')}}"
                                       title="Women Clothing &amp; Fashion">
                                        {{$category->name}}
                                    </a>
                                </h6>
                                @foreach(\App\Models\Category::where('parent_id',$category->id)->get() as $child)

                                    <p class="mb-0 mt-3">
                                        <a href="{{url('/')}}" class="fs-13 fw-300 text-reset hov-text-primary animate-underline-primary">
                                            {{$child->name}}
                                        </a>
                                    </p>
                                @endforeach


                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
