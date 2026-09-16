<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Cek mode maintenance dari folder core /home/agrm6137/ggi
if (file_exists($maintenance = '/home/agrm6137/ggi/storage/framework/maintenance.php')) {
    require $maintenance;
}

// 2. Muat autoloader Composer dari core
require '/home/agrm6137/ggi/vendor/autoload.php';

// 3. Inisialisasi aplikasi Laravel dari core
/** @var \Illuminate\Foundation\Application $app */
$app = require_once '/home/agrm6137/ggi/bootstrap/app.php';

// 4. Daftarkan path publik agar aset dan storage:link mengarah ke public_html
$app->usePublicPath(__DIR__);

// 5. Tangani request HTTP
$app->handleRequest(Request::capture());
