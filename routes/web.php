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


Route::post('store','Dashboard\CondidateController@store')->name('admin.storeCondidate');
Route::post('store','Dashboard\LeaveController@store')->name('admin.storeLeave');








