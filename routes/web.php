<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//create a post request to listen HTTP request
//when a post request is made it will be handles on AuthController
Route::post('/Register', [AuthController::class, 'register']);


Route::get('/Login', function () {
    return Inertia::render('Auth/Login');
})->name('login');
//create a post request to listen HTTP request
//when a post request is made it will be handles on AuthController
Route::post('/Login', [AuthController::class, 'login']);