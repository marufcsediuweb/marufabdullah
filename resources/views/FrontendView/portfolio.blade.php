@extends('FrontendView.Layout.frontendlayout')
@section('pageTitle')
    Our Portfolio | Maruf Abdullah
@endsection

@section('bodyContent')
    <div class="main">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    {{-- Showing 8 grid main columns --}}
                    <div class="col-md-12 col-lg-8">
                        <h1>Latest Works</h1>
                        <p>All latest works will be displayed here dynamically once the website is completed.</p>
                        @include('FrontendView.Component.casestudy')
                    </div>
                    {{-- Showing 4 grid sidebar column --}}
                    <div class="col-md-12 col-lg-4">
                        @include('FrontendView.Component.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
