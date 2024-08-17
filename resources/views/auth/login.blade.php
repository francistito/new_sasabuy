@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])

@section('content')


<div class="">

    <div class="row">
        <div class=" col-lg-4 offset-4">
            <div class="card mt-4">
                <div class="card-body">
                    <!-- Site Icon -->
                    <div class="size-48px mb-3 mx-auto mx-lg-0">
{{--                        <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/pOcEwsWKlrd8jMih6o68tn4YAjWbQEAwvZfeZVxJ.svg" alt="Site Icon" class="img-fit h-100">--}}
                    </div>
                    <!-- Titles -->
                    <div class="text-center text-lg-left">
                        <h1 class="fs-20 fs-md-24 fw-700 text-primary" style="text-transform: uppercase;">Welcome Back !</h1>
                        <h5 class="fs-14 fw-400 text-dark">Login to your account.</h5>
                    </div>
                    <!-- Login form -->
                    <div class="pt-3 pt-lg-4 bg-white">
                        <div class="">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
{{--                                <input type="hidden" name="_token" value="W1g1TGjxhGvKa5gB7K7rXfjxe4LT3vq20QGdV45W">--}}
                                <!-- Email or Phone -->
                                <div class="form-group phone-form-group mb-1">
                                    <label for="phone" class="fs-12 fw-700 text-soft-dark">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="country_code" value="1">



                                <!-- password -->
                                <div class="form-group">
                                    <label for="phone" class="fs-12 fw-700 text-soft-dark">{{ __('Password') }}</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>

                                <div class="row mb-2">
                                    <!-- Remember Me -->
                                    <div class="col-6">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="remember">
                                            <span class="has-transition fs-12 fw-400 text-gray-dark hov-text-primary">Remember Me</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                    <!-- Forgot password -->
                                    <div class="col-6 text-right">
                                        <a href="https://demo.activeitzone.com/ecommerce/password/reset" class="text-reset fs-12 fw-400 text-gray-dark hov-text-primary"><u>Forgot password?</u></a>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="mb-4 mt-4">
                                    <button type="submit" class="btn btn-primary btn-block fw-700 fs-14 rounded-0">Login</button>
                                </div>
                            </form>



                            <!-- Social Login -->
                            <div class="text-center mb-3">
                                <span class="bg-white fs-12 text-gray">Or Login With</span>
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
                            <a href="{{url('/register')}}" class="ml-2 fs-14 fw-700 animate-underline-primary">Register Now</a>
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
</div>
@endsection
