@extends('frontend.layouts.main', ['title' => __('SASABUY') , 'header' => __('SASABUY')])


@section('content')

    @include('frontend.includes.home_section.categories')
<!-- Today's deal -->
    @include('frontend.includes.home_section.best_deal')


    <!-- Best Selling  -->
{{--    @include('frontend.includes.home_section.best_selling')--}}


    <!-- Top Sellers -->
{{--    @include('frontend.includes.home_section.top_sellers')--}}
{{--    <!-- Top Brands -->--}}
{{--    @include('frontend.includes.home_section.top_brands')--}}

@endsection
