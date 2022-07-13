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


Route::view('/', 'main.home.index')->name('home');
Route::view('/about', 'main.about.index')->name('about');
Route::view('/menu', 'main.menu.index')->name('menu');
Route::view('/contact', 'main.contact.index')->name('contact');



