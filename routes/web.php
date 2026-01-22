<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/news-activities', function () {
    return view('NewsActivities');
});

Route::get('/all-news', function () {
    return view('AllNews');
});

Route::get('/about-us', function () {
    return view('AboutUs');
});

Route::get('/publications', function () {
    return view('Publications');
});

Route::get('/search-results', function () {
    return view('SearchResults');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/news-detail', function () {
    return view('NewsDetailed');
});

Route::get('/media', function () {
    return view('Media');
});

Route::get('/media-details', function () {
    return view('MediaDetails');
});

Route::get('/news-detail-2', function () {
    return view('NewsDetail2');
});
