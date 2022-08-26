<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::view('/','index')->name('/');

Route::view('/login','Dashboard.auth.login')->name('login');
Route::view('/condidat','contact')->name('condidat');
Route::view('/conge','conge')->name('conge');

Route::get('/c', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});








