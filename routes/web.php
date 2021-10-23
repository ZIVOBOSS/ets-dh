<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes   ENGLISH
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/en', function () {
    return view('/en/index');
});

Route::get('/en/service', function () {
    return view('/en/service');
});

Route::get('/en/services', function () {
    return view('/en/services');
});

Route::get('/en/about', function () {
    return view('/en/about');
});


Route::get('/en/blog', function () {
    return view('/en/blog');
});

Route::get('/en/partner', function () {
    return view('/en/partner');
});

Route::get('/en/project', function () {
    return view('/en/project');
});

Route::get('/en/contact', function () {
    return view('/en/contact');
});

Route::get('/head', function () {
    return view('/en/header');
});

Route::get('/foot', function () {
    return view('/en/footer');
});

/*
|--------------------------------------------------------------------------
| Web Routes   ENGLISH
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/fr', function () {
    return view('/en/index');
});

Route::get('/fr/service', function () {
    return view('/en/service');
});

Route::get('/fr/services', function () {
    return view('/en/services');
});

Route::get('/fr/about', function () {
    return view('/en/about');
});


Route::get('/fr/blog', function () {
    return view('/en/blog');
});

Route::get('/fr/partner', function () {
    return view('/en/partner');
});

Route::get('/fr/project', function () {
    return view('/en/project');
});

Route::get('/fr/contact', function () {
    return view('/en/contact');
});

Route::get('/head', function () {
    return view('/en/header');
});

Route::get('/foot', function () {
    return view('/en/footer');
});
