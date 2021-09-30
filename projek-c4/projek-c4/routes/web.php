<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Hengki Prando Silalahi",
        "email" => "hengkiprando@gmail.com",
        "img" => "kincir.jpg"
    ]);
});

Route::get('/news', function () {
    $news = [
        [
            "judulberita" => "Judul Berita Utama",
            "penulis" => "HHH",
            "isiberita" => "Mobil bekas masih diminati, terutama bagi mereka yang memiliki keuangan terbatas. 
            Selain harganya terjangkau, hal lain yang menarik dari kendaraan bekas pakai adalah pilihan brand,
            dan model yang bisa didapat cukup beragam. Ada beberapa pertimbangan sebelum membeli mobil bekas, 
            bukan hanya kondisi yang jadi perhatian utama. Tapi keiritan bahan bahan bakar kerap menjadi 
            pertimbangan konsumen, terlebih mobil itu digunakan sehari-hari."
        ],
        [
            "judulberita" => "Judul Berita Sampingan",
            "penulis" => "HwaW",
            "isiberita" => "Marketing showroom LB Auto, Riswan Susilo mengatakan, setiap orang memiliki 
            kebutuhan, dan selera berbeda. Jika memiliki modal Rp80 jutaan, dan menginginkan mobil yang irit 
            pilihannya ada di kelas LCGC (Low Cost Green Car)."
        ]
        ];
    return view('news', [
        "title" => "News",
        "news" => $news
    ]);
});