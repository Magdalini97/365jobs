<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

Route::get('/categorypage', function () {
    return view('pages.categorypage');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/positions', function () {
    return view('pages.positions');
});

Route::get('/looking-for-applicants-teliko', function () {
    return view('pages.looking-for-applicants-teliko');
});



