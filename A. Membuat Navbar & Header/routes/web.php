<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => "Homepage"]);
});

Route::get('posts', function () {
    return view('posts', ['title' => "Blog page"]);
});

Route::get('about', function () {
    return view('about', ['title' => "About Page"]);
});

Route::get('contact', function () {
    return view('contact', ['title' => "Contact Page"]);
});
