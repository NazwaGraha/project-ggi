<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('octopus-indonesia', [
        "title" => "Octopus Indonesia | Home"
    ]);
});
Route::get('/best-octopus-indonesia', function () {
    return view('best-octopus-indonesia', [
        "title" => "Best Octopus Indonesia | about"
    ]);
});

Route::get('/seafood-octopus-distributor', function () {
    return view('seafood-octopus-distributor', [
        "title" => "Seafood Octopus Distributor | Product"
    ]);
});

Route::get('/galery', function () {
    return view('galery', [
        "title" => "Galery | Octopus Indonesia | Best Octopus Indonesia"
    ]);
});

Route::get('/contact-us', function () {
    return view('contact-us', [
        "title" => "Contact Us | Octopus Indonesia | Best Octopus Indonesia"
    ]);
});

Route::get('/generate', function(){
   \Illuminate\Support\Facades\Artisan::call('storage:link');
   echo 'ok';
});


Route::resource('/post', \App\Http\Controllers\PostController::class);

// Dynamic Sitemap Generator that keeps existing URLs and appends newly published posts
Route::get('/sitemap.xml', function () {
    $staticUrls = [
        ['loc' => 'https://guritaglobal.com/', 'priority' => '1.00', 'lastmod' => '2025-01-19T14:08:18+00:00'],
        ['loc' => 'https://guritaglobal.com/best-octopus-indonesia', 'priority' => '0.80', 'lastmod' => '2025-01-19T14:08:18+00:00'],
        ['loc' => 'https://guritaglobal.com/seafood-octopus-distributor', 'priority' => '0.80', 'lastmod' => '2025-01-19T14:08:18+00:00'],
        ['loc' => 'https://guritaglobal.com/post', 'priority' => '0.80', 'lastmod' => '2025-01-19T14:08:18+00:00'],
        ['loc' => 'https://guritaglobal.com/galery', 'priority' => '0.80', 'lastmod' => '2025-01-19T14:08:18+00:00'],
        ['loc' => 'https://guritaglobal.com/contact-us', 'priority' => '0.80', 'lastmod' => '2025-01-19T14:08:18+00:00'],
        ['loc' => 'https://guritaglobal.com/post/gurita-global-internasional-the-best-choice-for-frozen-octopus-supplier-in-indonesia', 'priority' => '0.80', 'lastmod' => '2025-01-19T14:08:18+00:00'],
    ];

    $posts = [];
    try {
        $posts = \App\Models\Post::where('slug', '!=', 'gurita-global-internasional-the-best-choice-for-frozen-octopus-supplier-in-indonesia')
            ->latest()
            ->get();
    } catch (\Throwable $e) {
        // Fallback gracefully if database table is not connected
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

    foreach ($staticUrls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
        $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';
        $xml .= '</url>';
    }

    foreach ($posts as $post) {
        if (!empty($post->slug)) {
            $lastmod = !empty($post->updated_at) ? $post->updated_at->toAtomString() : date('c');
            $xml .= '<url>';
            $xml .= '<loc>https://guritaglobal.com/post/' . htmlspecialchars($post->slug) . '</loc>';
            $xml .= '<lastmod>' . $lastmod . '</lastmod>';
            $xml .= '<priority>0.80</priority>';
            $xml .= '</url>';
        }
    }

    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
});



