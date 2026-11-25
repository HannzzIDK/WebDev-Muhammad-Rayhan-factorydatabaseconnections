<?php

use Illuminate\Support\Facades\Route;
use App\Models\blogs;
use App\Models\about;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $about = about::get();
    return view('about',[
        'about' => $about
    ]);
});

Route::get('/blog', function () {
    $blogs = blogs::get();
    return view('blog',[
      'blogs' => $blogs
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});