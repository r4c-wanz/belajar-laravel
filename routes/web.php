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

/* Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home', [
        "title" => "Halaman Home",
        "foto" => "img/me.png",
        "name" => "Rachel Setyawan",
        "job" => "Frontend Developer",
        "description" => "I Want to be a Fullstack Developer"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Halaman About",
        "name" => "Rachel Setyawan",
        "ttl" => "Jakarta, 07 Agustus",
        "no_wa" => "012345678910",
        "hobi" => "Coding, Game",
        "jargon" => "Random",
        "foto" => "img/me.png"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Halaman Contact"
    ]);
});
