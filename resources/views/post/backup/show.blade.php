@extends('layout.main2')
@section('title', $post->title . ' | GGI')
@section('description', "$post->MetaDescription")
@section('keyword', "$post->keyword")

@section('container')
    </header>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Detail</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>{{ $post->title ?? '' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-xxl-9 col-xl-10 col-lg-11">
                    <div class="th-blog blog-single has-post-thumbnail">
                        
                        <div class="text-center mb-4">
                            <img class="img-fluid rounded shadow-sm" 
                                 alt="{{ $post->title }}" 
                                 src="{{ asset('storage/'.$post->thumbnail)}}" 
                                 style="max-width: 100%; height: auto; max-height: 480px; object-fit: cover;" />
                        </div>

                        <h1 class="custom-blog-title mb-3">
                            {{ $post->title }}
                        </h1>
                        
                        <hr class="my-4" style="border-top: 1px solid #eaeaea;">

                        <article class="blog-article-content text-justify">
                            {!! $post->body !!}
                        </article>

                    </div>
                    
                    <div class="text-center my-5">
                        <a href="/post" class="th-btn style4" style="padding: 12px 35px;"> Back </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <style>
        /* === PERBAIKAN JUDUL UTAMA ARTIKEL (H1) === */
        h1.custom-blog-title {
            font-size: 1.8rem !important; 
            font-weight: 800 !important; 
            line-height: 1.4 !important;
            color: #111111 !important;
            letter-spacing: -0.01em !important;
            display: block !important;
        }

        /* === GAYA DASAR TEXT BODY === */
        .blog-article-content {
            font-size: 16px !important;
            line-height: 1.8 !important;
            color: #333333 !important;
            font-family: 'Inter', sans-serif !important;
        }

        /* === OVERRIDE TOTAL H1 - H5 DI DALAM BODY ARTIKEL === */
        /* Menangkal paksaan ukuran besar dari asset Filament */
        
        .blog-article-content h1 {
            font-size: 1.6rem !important;
            font-weight: 700 !important;
            color: #111111 !important;
            margin-top: 1.8rem !important;
            margin-bottom: 0.8rem !important;
            line-height: 1.4 !important;
        }

        .blog-article-content h2 {
            font-size: 1.4rem !important; 
            font-weight: 700 !important;
            color: #111111 !important;
            margin-top: 1.8rem !important;
            margin-bottom: 0.8rem !important;
            line-height: 1.4 !important;
        }

        .blog-article-content h3 {
            font-size: 1.25rem !important;
            font-weight: 700 !important;
            color: #222222 !important;
            margin-top: 1.5rem !important;
            margin-bottom: 0.6rem !important;
            line-height: 1.4 !important;
        }

        .blog-article-content h4 {
            font-size: 1.15rem !important;
            font-weight: 600 !important;
            color: #333333 !important;
            margin-top: 1.3rem !important;
            margin-bottom: 0.5rem !important;
        }

        .blog-article-content h5 {
            font-size: 1rem !important;
            font-weight: 600 !important;
            color: #444444 !important;
            margin-top: 1.2rem !important;
            margin-bottom: 0.5rem !important;
        }

        /* === STRUKTUR PARAGRAF DAN LIST === */
        .blog-article-content p {
            margin-bottom: 1.3rem !important;
            font-size: 16px !important;
            line-height: 1.8 !important;
            color: #333333 !important;
        }

        .blog-article-content ul, 
        .blog-article-content ol {
            padding-left: 1.5rem !important;
            margin-bottom: 1.3rem !important;
            list-style: disc !important; /* Memaksa bullet point muncul kembali jika hilang oleh Tailwind */
        }

        .blog-article-content li {
            margin-bottom: 0.5rem !important;
            line-height: 1.7 !important;
        }

        /* === RESPONSIVE UNTUK SMARTPHONE === */
        @media (max-width: 767px) {
            h1.custom-blog-title { font-size: 1.4rem !important; }
            .blog-article-content h1 { font-size: 1.35rem !important; }
            .blog-article-content h2 { font-size: 1.25rem !important; }
            .blog-article-content h3 { font-size: 1.15rem !important; }
        }
    </style>
@endsection