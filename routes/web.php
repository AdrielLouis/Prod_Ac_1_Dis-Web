<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'inicio')->name('home');
Route::view('/html', 'html')->name('html');
Route::view('/css', 'css')->name('css');
Route::view('/contacto', 'contacto')->name('contacto');
