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

//prefix for all route admin
Route::group(['namespace' => 'Dashboard' , 'middleware'=> 'auth:admin', 'prefix'=>'admin'], function () {
    Route::get('/d', 'downloadPdf@generatePDF');
    Route::get('/helps','Help@getHelpsList')->name('readHelp');
    Route::get('','DashboardController@index')->name('admin.dashboard');
    Route::get('/logout','LoginController@logout')->name('admin.logout');



    Route::group(['prefix' => 'vendeur'], function () {
        Route::get('/','VendorController@index')->name('admin.VendorList');

        Route::get('create','VendorController@create')->name('admin.VendorCreate');

        Route::post('store','VendorController@store')->name('admin.VendorStore');

        Route::get('edit/{id}','VendorController@edit')->name('admin.VendorEdit');

        Route::post('update/{id}','VendorController@update')->name('admin.VendorUpdate');

        Route::get('delete/{id}','VendorController@delete')->name('admin.VendorDelete');

        Route::get('changeStatus','VendorController@changeStatus')->name('admin.VendorChangeStatus');

        Route::get('/live_search/action', 'VendorController@action')->name('live_search.action');


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
