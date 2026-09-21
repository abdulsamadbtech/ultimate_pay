<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
     return view('welcome');
});


Route::get('/payment', function () {
    return view('payment');
});

Route::get('/get-started', function () {
    return view('get-started');
})->name('get-started');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');