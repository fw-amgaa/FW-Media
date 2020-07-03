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

Route::get('/', function () {
    return view('home');
});

Route::get('/our-team', function () {
    return view('our-team');
});

Route::get('/single-team', function () {
    return view('single-team');
});

Route::get('/our-process', function () {
    return view('our-process');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/coming-soon', function () {
    return view('extras.coming-soon');
});

Route::get('/elements', function () {
    return view('extras.elements');
});

Route::get('/typography', function () {
    return view('extras.typography');
});

Route::get('/blog', function () {
    return view('blogs.blog');
});

Route::get('/blog-grid', function () {
    return view('blogs.blog-grid');
});

Route::get('/blog-single', function () {
    return view('blogs.blog-single');
});

Route::get('/portfolio-grid', function () {
    return view('portfolio.portfolio-grid');
});

Route::get('/portfolio-single', function () {
    return view('portfolio.portfolio-single');
});

Route::get('/app-development', function () {
    return view('services.app-development');
});

Route::get('/content-marketing', function () {
    return view('services.content-marketing');
});

Route::get('/ppc-management', function () {
    return view('services.ppc-management');
});

Route::get('/search-engine-optimization', function () {
    return view('services.search-engine-optimization');
});

Route::get('/social-media', function () {
    return view('services.social-media');
});

Route::get('/portfolio', function () {
    return view('portfolio.portfolio-single');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/free-a-quote', function () {
    return view('free-a-quote');
});

Route::get('locale/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});



