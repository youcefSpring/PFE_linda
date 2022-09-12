<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;
// use App\Http\Controllers\Dashboard\CondidateController;
// Route::group(
//     [
//         'prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){

// Route::resource('condidates', CondidateController::class);
Route::post('storeCondidate','Dashboard\CondidateController@store')->name('admin.storeCondidate');
Route::post('storeLeave','Dashboard\LeaveController@store')->name('admin.storeLeave');
Route::get('getfile/{folder}/{id}/{filename}', 'Dashboard\DashboardController@getFile')->name('admin.getfile');
//prefix for all route admin
Route::group(['namespace' => 'Dashboard' , 'middleware'=> 'auth:admin', 'prefix'=>'admin'], function () {
    Route::get('/d', 'downloadPdf@generatePDF');
    Route::get('/helps','Help@getHelpsList')->name('readHelp');
    Route::get('','DashboardController@index')->name('admin.dashboard');
    Route::get('/logout','LoginController@logout')->name('admin.logout');


    Route::group(['prefix' => 'users'], function () {
        Route::get('/','UserController@index')->name('admin.UserList');

        Route::get('create','UserController@create')->name('admin.UserCreate');

        Route::post('store','UserController@store')->name('admin.UserStore');

        Route::get('edit/{id}','UserController@edit')->name('admin.UserEdit');

        Route::post('update/{id}','UserController@update')->name('admin.UserUpdate');

        Route::get('delete/{id}','UserController@delete')->name('admin.UserDelete');

        Route::get('changeStatus/{id}/{status}','UserController@changeStatus')->name('admin.UserChangeStatus');

        Route::get('/live_search/action', 'Dashboard\UserController@action')->name('live_search.action');
    });

    Route::group(['prefix' => 'leaves'], function () {
        Route::get('/','LeaveController@index')->name('admin.LeaveList');

        Route::get('create','LeaveController@create')->name('admin.LeaveCreate');

        Route::post('store','LeaveController@store')->name('admin.LeaveStore');

        Route::get('edit/{id}','LeaveController@edit')->name('admin.LeaveEdit');

        Route::post('update/{id}','LeaveController@update')->name('admin.LeaveUpdate');

        Route::get('delete/{id}','LeaveController@delete')->name('admin.LeaveDelete');

        Route::get('changeStatus/{id}/{status}','LeaveController@changeStatus')->name('admin.LeaveChangeStatus');

        Route::get('/live_search/action', 'Dashboard\LeaveController@action')->name('live_search.action');
    });
    Route::group(['prefix' => 'condidates'], function () {
        Route::get('/','CondidateController@index')->name('admin.CondidateList');

        Route::get('create','CondidateController@create')->name('admin.CondidateCreate');

        Route::post('store','CondidateController@store')->name('admin.CondidateStore');

        Route::get('edit/{id}','CondidateController@edit')->name('admin.CondidateEdit');

        Route::post('update/{id}','CondidateController@update')->name('admin.CondidateUpdate');

        Route::get('delete/{id}','CondidateController@delete')->name('admin.CondidateDelete');

        Route::get('changeStatus/{id}/{status}','CondidateController@changeStatus')->name('admin.CondidateChangeStatus');

        Route::get('/live_search/action', 'Dashboard\LeaveController@action')->name('live_search.action');


    });


    ###################### Fiche de voeux Route ###############################
    Route::group(['prefix' => 'pv'], function () {
        Route::get('/import', 'DashboardController@importPv')->name('importPv');
        Route::post('/stock', 'DashboardController@stockerPv')->name('stockerPv');
    });

    ###################### Fiche de voeux Route ###############################
    Route::group(['prefix' => 'fichier'], function () {
        Route::get('/import', 'DashboardController@importFicheVoeux')->name('importFicheVoeux');
        Route::post('/stock', 'DashboardController@stockerFichVoeux')->name('stockerFichVoeux');
    });
    ###################### Profile Route ###############################
    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit','ProfileController@editProfile')->name('admin.editProfile');
        Route::put('update','ProfileController@updateProfile')->name('admin.updateProfile');

    });



});


Route::group(['namespace' => 'Dashboard' ,'middleware'=> 'guest:admin','prefix'=>'admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.postLogin');

});

//  });
