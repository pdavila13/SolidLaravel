<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

App::bind(App\Repositories\RepositoryInterface::class, App\Repositories\InvoiceRepository::class);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web','pjax'], function () {

    Route::get('/',['as' => 'welcome', 'uses' => 'WelcomeController@Index']);


    Route::get('/invoices', [
        'middleware' => 'auth',
        'uses' => 'InvoicesController@index'
    ]);

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::post('/sendContactEmail','ContactEmailController@send');



    Route::get('apartat1',function() {
       return view ('apartat1');
    });

    Route::get('apartat2',function() {
        return view ('apartat2');
    });

    Route::get('apartat3',function() {
        return view ('apartat3');
    });


});

include "test-router.php";
