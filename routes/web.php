<?php
use App\Models\Form;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormProfileController;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about-us', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/contact-us', function () {
    return Inertia::render('Contact', ['forms' => Form::all()]);
})->name('contact');

Route::get('/login-account', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/create-account', function () {
    return Inertia::render('Auth/Register');
})->name('register');


Route::post('/login-account', [AuthController::class, 'login']);
Route::post('/create-account', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/contact-us', [FormController::class, 'createForm']);

Route::get('/edit-account', [AuthProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/edit-account', [AuthProfileController::class, 'update'])->name('profile.update');
Route::delete('/edit-account', [AuthProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/editForm/{id}', [FormProfileController::class, 'edit'])->name('form.edit');
Route::patch('/editForm/{id}', [FormProfileController::class, 'update'])->name('form.update');
Route::delete('/editForm/{id}', [FormProfileController::class, 'destroy'])->name('form.destroy');

Route::get('/editForm', function () {
    return Inertia::render('Edit');
})->name('edit');
Route::get('/editForm', function () {
    return Inertia::render('Edit', ['companies' => Form::all()]);
})->name('edit');