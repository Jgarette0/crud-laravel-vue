<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/About', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/Contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/Login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/Register', function () {
    return Inertia::render('Auth/Register');
})->name('register');
