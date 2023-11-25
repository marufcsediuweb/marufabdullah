@extends('FrontendView.Layout.frontendlayout')
@section('pageTitle')
    Homepage | Maruf Abdullah
@endsection

@section('bodyContent')
<div class="main">
    <div class="hero-area">
        <div class="container">
            <div class="row">
{{-- Showing 8 grid main columns --}}
                <div class="col-md-12 col-lg-8">
                    @include('FrontendView.Component.marufinfo')
                    @include('FrontendView.Component.testimonial')
                    @include('FrontendView.Component.services')
                    @include('FrontendView.Component.casestudy')
                </div>
{{--    @include('FrontendView.Component.marufinfo')--}}

{{-- Showing 4 grid sidebar column --}}
                <div class="col-md-12 col-lg-4">
                    @include('FrontendView.Component.sidebar')
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
