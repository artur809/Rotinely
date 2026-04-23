<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/cadastro', function() {
    return view('auth.cadastro');
})->name('cadastro');
Route::get('/home', function () {
    return view('home');
})->name('home');