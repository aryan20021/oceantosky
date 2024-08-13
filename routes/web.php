<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'header.about')->name('about');
Route::view('/blogs', 'header.blogs')->name('blogs');
Route::view('/contactus', 'header.contactus')->name('contactus');
Route::view('/destination', 'header.destination')->name('destination');
Route::view('/pacakage', 'header.pacakage')->name('pacakage');

//route for pages

Route::view('/gallery', 'header.pages.gallery')->name('gallery');
Route::view('/guide', 'header.pages.guide')->name('guide');
Route::view('/faq', 'header.pages.faq')->name('faq');

//route for package-details
Route::view('/ebc','package-list.everest')->name('ebc');
Route::view('/langtang-valley','package-list.langtang')->name('langtang');
Route::view('/abc','package-list.abc')->name('abc');
Route::view('/poonhill','package-list.poonhill')->name('poonhill');
Route::view('/gosaikunda','package-list.gosaikunda')->name('gosaikunda');
Route::view('/annapurna-circuit','package-list.annapurna-circuit')->name('abc-circuit');
Route::view('/ebc-gokyopass','package-list.gokyochola')->name('gokyochola');
Route::view('/ktm-ctw-lum-pkr','package-list.ktmpkr')->name('kclp');

//route for blog-list
Route::view('/blog1', 'blog-list.blog1')->name('blog1');
Route::view('/blog2', 'blog-list.blog2')->name('blog2');
Route::view('/blog3', 'blog-list.blog3')->name('blog3');
Route::view('/blog4', 'blog-list.blog4')->name('blog4');
