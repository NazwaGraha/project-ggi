<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Specialized Indonesia Octopus Processor | GGI</title>
    <meta name="author" content="Gurita Global International By NazwaGraha">
    <meta name="description"
        content="Octopus Indonesia is Specialized Indonesia Octopus Processor company in processing and selling high-quality octopus, serving both national and international markets with fresh and reliable products">
    <meta name="keywords"
        content="Specialized Indonesia Octopus Processor, Octopus Indonesia, Best Octopus Indonesia, Gurita Global International,  Indonesian octopus processing company, Indonesian octopus supplier,
    International octopus seller, Indonesian octopus exporter, High-quality octopus from Indonesia, Indonesian octopus price, Indonesian octopus industry, Fresh octopus from Indonesia, International octopus distributor
">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta property="og:title" content="Specialized Indonesia Octopus Processor | GGI">
    <meta property="og:description" content="Octopus Indonesia is a Specialized Indonesia Octopus Processor company in processing and selling high-quality octopus, serving both national and international markets with fresh and reliable products">
    <meta property="og:url" content="https://guritaglobal.com">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Specialized Indonesia Octopus Processor | GGI">
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
                <h1 class="breadcumb-title">Blog Lists View</h1>
                <ul class="breadcumb-menu">
                    <li><a href="https://guritaglobal.com">Home</a></li>
                    <li>Blog Lists View</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <!--Postingan-->



                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
@foreach ($posts as $post)
<br>
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('storage/'.$post->thumbnail)}}" alt="Specialized Indonesia Octopus Processor" /></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="https://guritaglobal.com/post"><i class="fa-light fa-user"></i>by
                                    {{ $post->id }}</a>
                                <a href="blog.html"><i class="fa-solid fa-calendar-days"></i>{{ $post->created_at->format('d-m-Y') }}</a>
                                <a href="blog-details.html"><img src="assets/img/icon/map.svg" alt="" />Tour
                                    Guide</a>
                            </div>
                            <h2 class="blog-title">

                                <a href="{{ url('article',$post->slug) ?? ''}}">{{ $post->title ?? '' }}</a>

                            </h2>
                            <p class="blog-text">
                                {{ Str::limit(strip_tags($post->body),250,'...') }}

                            </p>
                            <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                        </div>

@endforeach
                    </div>

                    <div class="th-pagination">
                        <ul>
                            <li>
                                <a class="active" href="blog.html">1</a>
                            </li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html">4</a></li>
                            <li>
                                <a class="next-page" href="blog.html">Next
                                    <img src="assets/img/icon/arrow-right4.svg" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--end postingan-->
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">

                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($posts as $post)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"
                                            ><img
                                                src="{{ asset('storage/'.$post->thumbnail)}}"
                                                alt="Blog Image"
                                        /></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a
                                                class="text-inherit"
                                                href="blog-details.html"
                                                >{{ $post->title ?? '' }}</a
                                            >
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"
                                                ><i
                                                    class="fa-regular fa-calendar"
                                                ></i
                                                >{{ $post->created_at->format('d-m-Y') }}</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
