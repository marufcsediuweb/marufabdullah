<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Offering all type of website development, building funnels, administrative & tech support for your business at affordable price to generate 2X more sales!">
    <meta name="keywords" content="Expert Sales Funnels Builder, Build High Converting Funnel Page, Top Wordpress Developer, Top Rated Freelancer, Maruf Abdullah, Landing Page Designer, Web Designers Near Me, Web Developer Near me, Web Design Agency">
    <meta name="author" content="Maruf Abdullah, Freelance WordPress Developer">

    <title>@yield('pageTitle')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('FrontendAssets/images/rion.jfif') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="{{ asset('FrontendAssets/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ asset('FrontendAssets/css/responsive.css') }}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('FrontendAssets/css/style.css') }}">
    @include('FrontendView.Component.googleanalytics')
</head>

<body>
@include('FrontendView.Layout.header')

{{--Starting of Main Content Coming From Pages--}}

@yield('bodyContent')

{{--End of Main Content Coming From Pages--}}

@include('FrontendView.Layout.footer')

    <script src="{{ asset('FrontendAssets/js/jquery-3.0.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/main.js') }}"></script>
@include('FrontendView.Component.thridpartyscripts')
</body>
</html>

