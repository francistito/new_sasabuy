@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])

@section('content')
    <div class="row">
        <div class=" col-lg-4 offset-4">
            <div class="card mt-4">
                <div class="card-body">
                    <!-- Site Icon -->
{{--                    <div class="size-48px mb-3 mx-auto mx-lg-0">--}}
{{--                        <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/pOcEwsWKlrd8jMih6o68tn4YAjWbQEAwvZfeZVxJ.svg" alt="Site Icon" class="img-fit h-100">--}}
{{--                    </div>--}}
                    <!-- Titles -->
                    <div class="text-center text-lg-left">
                        <h1 class="fs-20 fs-md-24 fw-700 text-primary" style="text-transform: uppercase;">Welcome  !</h1>
                        <h5 class="fs-14 fw-400 text-dark">Register to sasabuy.</h5>
                    </div
                    <!-- Login form -->
                    <div class="pt-3 pt-lg-4 bg-white">
                        <div class="">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                {{--                                <input type="hidden" name="_token" value="W1g1TGjxhGvKa5gB7K7rXfjxe4LT3vq20QGdV45W">--}}
                                <!-- Email or Phone -->
                                <div class="form-group phone-form-group mb-1">
                                    <label for="phone" class="fs-12 fw-700 text-soft-dark">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group phone-form-group mb-1">
                                    <label for="email" class="fs-12 fw-700 text-soft-dark">Email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group phone-form-group mb-1">
                                    <label for="phone" class="fs-12 fw-700 text-soft-dark">Phone number</label>
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="name" autofocus>

                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group phone-form-group mb-1">
                                    <label for="phone" class="fs-12 fw-700 text-soft-dark">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group phone-form-group mb-1">
                                    <label for="phone" class="fs-12 fw-700 text-soft-dark">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <input type="hidden" name="country_code" value="1">

                                <!-- Submit Button -->
                                <div class="mb-4 mt-4">
                                    <button type="submit" class="btn btn-primary btn-block fw-700 fs-14 rounded-0">Register</button>
                                </div>
                            </form>



                            <!-- Social Login -->
                            <div class="text-center mb-3">
                                <span class="bg-white fs-12 text-gray">Or register With</span>
                            </div>
                            <ul class="list-inline social colored text-center mb-4">
                                <li class="list-inline-item">
                                    <a href="#" class="facebook">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="google">
                                        <i class="lab la-google"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="twitter">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="apple">
                                        <i class="lab la-apple"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Register Now -->
                        <p class="fs-12 text-gray mb-0">
                            Dont have an account?
                            <a href="{{url('/login')}}" class="ml-2 fs-14 fw-700 animate-underline-primary">Login Now</a>
                        </p>
                        <!-- Go Back -->
                        <a href="{{url('/')}}" class="mt-3 fs-14 fw-700 d-flex align-items-center text-primary" style="max-width: fit-content;">
                            <i class="las la-arrow-left fs-20 mr-1"></i>
                            Back to Previous Page
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
