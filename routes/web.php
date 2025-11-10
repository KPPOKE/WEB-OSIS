<?php
use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

Route::get('about', function () {
    return view('about',['title' => 'About']);
});




Route::get('/eskul', [EskulController::class, 'index'])->name('eskul.index');


Route::get('news', function () {
    return view('news',['title' => 'News']);
});

Route::get('event', function () {
    return view('event',['title' => 'Events']);
});

Route::get('contact', function () {
    return view('contact',['title' => 'Contact']);
});
