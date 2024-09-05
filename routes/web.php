<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhyi']);
});

Route::get('/home', function () {
    return view('home');
});

// Buat 2 rute baru
// 1. /blog
// 2.artikel
// 2.contact
// email / social media
