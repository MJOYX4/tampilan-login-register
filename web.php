<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/loginst', function () {
    return view('auth.loginst'); 
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/registerst', function () {
    return view('auth.registerst');
});