<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Specialized Indonesia Octopus Processor | GGI</title>
    <meta name="author" content="Gurita Global International By NazwaGraha">
    <meta name="description"
        content="Octopus Indonesia is a Specialized Indonesia Octopus Processor company in processing and selling high-quality octopus, serving both national and international markets with fresh and reliable products">
    <meta name="keywords"
        content="Specialized Indonesia Octopus Processor, Octopus Indonesia, Best Octopus Indonesia, Gurita Global International,  Indonesian octopus processing company, Indonesian octopus supplier,
    International octopus seller, Indonesian octopus exporter, High-quality octopus from Indonesia, Indonesian octopus price, Indonesian octopus industry, Fresh octopus from Indonesia, International octopus distributor
">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta property="og:title" content="Specialized Indonesia Octopus Processor | GGI">
    <meta property="og:description"
        content="Octopus Indonesia is a leading company in processing and selling high-quality octopus, serving both national and international markets with fresh and reliable products">
    <meta property="og:url" content="https://guritaglobal.com">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Specialized Indonesia Octopus Processor | GGI">
<link rel="icon" type="image/png" href="assets/img/GGILogo.png">
    <link rel="canonical" href="https://guritaglobal.com" />
    <link rel="apple-touch-icon" type="image/png" href="assets/img/GGILogo.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="google-site-verification" content="pf3U3Mu1mm5uf_VORNP49ZcDEAIgBpKR6ufOavORKeM" />
</head>
@extends('layout.main')
@section('container')
    </header>



    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gurita Global Internasional</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>News And Articles</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="col-xxl-12 col-lg-7">
            <div class="row">
                <div class="pagination mb-4 justify-content-center">{{ $posts->links('pagination::bootstrap-4') }}</div>
                <div class="row mb-2">
                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <center><a href="{{ url('post', $post->slug) ?? '' }}"><img
                                            src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title ?? '' }}" width="200"
                                            height="100" /></a></center>
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h6 class="">
                                        <a href="{{ url('post', $post->slug) ?? '' }}">{{ $post->title ?? '' }}</a>
                                    </h6>
                                    <p class="card-text mb-auto">{{ Str::limit(strip_tags($post->body), 65, '...') }}</p>
                                    <a href="{{ url('post', $post->slug) ?? '' }}">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            </div>


        </div>
        <div class="pagination mt-4 justify-content-center">{{ $posts->links('pagination::bootstrap-4') }}</div>

    </section>

@endsection
