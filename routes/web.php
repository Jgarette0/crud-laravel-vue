<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/About', function () {
    return Inertia::render('About');
});

Route::get('/Contact', function () {
    return Inertia::render('Contact');
});

Route::get('/LoggedIn', function () {
    return Inertia::render('Log');
});

