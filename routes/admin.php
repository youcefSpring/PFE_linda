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



    Route::group(['prefix' => 'leaves'], function () {
        Route::get('/','LeaveController@index')->name('admin.LeaveList');

        Route::get('create','LeaveController@create')->name('admin.LeaveCreate');

        Route::post('store','LeaveController@store')->name('admin.LeaveStore');

        Route::get('edit/{id}','LeaveController@edit')->name('admin.LeaveEdit');

        Route::post('update/{id}','LeaveController@update')->name('admin.LeaveUpdate');

        Route::get('delete/{id}','LeaveController@delete')->name('admin.LeaveDelete');

        Route::get('changeStatus','LeaveController@changeStatus')->name('admin.LeaveChangeStatus');

        Route::get('/live_search/action', 'Dashboard\LeaveController@action')->name('live_search.action');


    });
    Route::group(['prefix' => 'condidates'], function () {
        Route::get('/','CondidateController@index')->name('admin.CondidateList');

        Route::get('create','CondidateController@create')->name('admin.CondidateCreate');

        Route::post('store','CondidateController@store')->name('admin.CondidateStore');

        Route::get('edit/{id}','CondidateController@edit')->name('admin.CondidateEdit');

        Route::post('update/{id}','CondidateController@update')->name('admin.CondidateUpdate');

        Route::get('delete/{id}','CondidateController@delete')->name('admin.CondidateDelete');

        Route::get('changeStatus','CondidateController@changeStatus')->name('admin.CondidateChangeStatus');

        Route::get('/live_search/action', 'Dashboard\LeaveController@action')->name('live_search.action');


    });

    Route::group(['prefix' => 'stock'], function () {
        Route::get('/','StoreManagerController@index')->name('admin.StoreManagerList');

        Route::get('create','StoreManagerController@create')->name('admin.StoreManagerCreate');

        Route::post('store','StoreManagerController@store')->name('admin.StoreManagerStore');

        Route::get('edit/{id}','StoreManagerController@edit')->name('admin.StoreManagerEdit');

        Route::post('update/{id}','StoreManagerController@update')->name('admin.StoreManagerUpdate');

        Route::get('delete/{id}','StoreManagerController@delete')->name('admin.StoreManagerDelete');

        Route::get('changeStatus','StoreManagerController@changeStatus')->name('admin.StoreManagerChangeStatus');

        Route::get('/live_search/action', 'StoreManagerController@action')->name('admin.searchStoreManager');


    });

    Route::group(['prefix' => 'product'], function () {
        Route::view('/list','Dashboard.Products.index')->name('admin.ProductList');
        Route::get('/live_search', 'ProductController@list')->name('admin.ProductSearch');

    });
    Route::group(['prefix' => 'sales'], function () {

        Route::get('/list', 'SaleController@list')->name('admin.SaleList');
        Route::get('/detail/{id}', 'SaleController@detail')->name('admin.SaleDetail');


    });
    Route::group(['prefix' => 'providers'], function () {
        Route::view('/list','Dashboard.Providers.index')->name('admin.ProviderList');
        Route::get('/live_search', 'ProviderController@list')->name('admin.ProviderSearch');

    });
    Route::group(['prefix' => 'employee'], function () {
        Route::get('/import', 'ExcelImportController@importPage')->name('importEmployeeExcel');
        Route::post('/stocker','ExcelImportController@stockerExcel')->name('stockerEmployeeExcel');
    });
    ###################### Categories Route ###############################
    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit','ProfileController@editProfile')->name('admin.editProfile');
        Route::put('update','ProfileController@updateProfile')->name('admin.updateProfile');

    });
    ##################### end Categories Routes ##########################
    Route::resource('ajaxItems','EmployeeController');


});


Route::group(['namespace' => 'Dashboard' ,'middleware'=> 'guest:admin','prefix'=>'admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.postLogin');

});

//  });
