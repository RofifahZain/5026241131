<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1 >Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('Bootstrap', function () {
    return view('bootstrap');
});

Route::get('Robodog', function () {
    return view('robodog');
});

Route::get('RobodogITS', function () {
    return view('robodogITS');
});

Route::get('Template', function () {
    return view('temp');
});

Route::get('WeeklyActivity', function () {
    return view('weeklyActivity');
});

Route::get('WelcomeITS', function () {
    return view('welcomeITS');
});

Route::get('LandingPage', function () {
    return view('landingPage');
});

Route::get('Portofolio', function () {
    return view('portofolioWeb');
});

Route::get('Boost', function () {
    return view('linktreeBoost');
});

Route::get('Dell', function () {
    return view('dellLanding');
});

Route::get('Pomellato', function () {
    return view('pomellatoWebsite');
});

Route::get('Menu', function () {
    return view('menu');
});



