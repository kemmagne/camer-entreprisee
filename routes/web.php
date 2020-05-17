<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::get('/register', 'Admin\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Admin\RegisterController@createControlleur')->name('admin.register.submit');
    Route::get('/form', 'Admin\RegisterController@showForm')->name('admin.form');

    Route::get('/users', 'Admin\FormController@index')->name('admin.users');


    Route::post('/form', 'Admin\FormController@store')->name('froms.store');

    Route::delete('/users/{id}','Admin\FormController@destroy')->name('users.destroy');


    //Route::get('/users', 'Admin\FormController@index');
});


Route::group(['prefix'=>'home'], function(){
    Route::get('/canneaux', 'Home\CanneauxController@index')->name('canneaux.home');
    Route::get('/canneaux-create', 'Home\CanneauxController@create');
    Route::post('/canneaux-create', 'Home\CanneauxController@store')->name('canneaux.store');

    Route::get('/canneaux/{id}','Home\CanneauxController@show')->name('canneaux.show');
    Route::get('/canneaux/{id}/edit','Home\CanneauxController@edit')->name('canneaux.edit');

    Route::put('/canneaux/{id}','Home\CanneauxController@update')->name('canneaux.update');

    Route::delete('canneaux/{id}','Home\CanneauxController@destroy')->name('canneaux.destroy');







    // PRoduit
    Route::get('/produit', 'Home\ProduitController@index')->name('produit.home');

    Route::get('/produit-create', 'Home\ProduitController@create');
    Route::post('/produit-create', 'Home\ProduitController@store')->name('produit.store');
    Route::post('/produit-create', 'Home\ProduitController@store')->name('produit.store');

    Route::get('/produit/{id}','Home\ProduitController@show')->name('produit.show');
    Route::get('/produit/{id}/edit','Home\ProduitController@edit')->name('produit.edit');
    Route::put('/produit/{id}', 'Home\ProduitController@update')->name('produit.update');

    Route::delete('produit/{id}','Home\ProduitController@destroy')->name('produit.destroy');
    Route::get('/produit/{id}/promotion','Home\ProduitController@promotion')->name('produit.promotion');



    // Marchée
    Route::get('/marche-create', 'Home\MarcheController@create');
    Route::post('/marche-create', 'Home\MarcheController@store')->name('marche.store');
    Route::get('/{id}','Home\MarcheController@show')->name('marche.show');
    Route::get('/{id}/edit','Home\MarcheController@edit')->name('marche.edit');
   // Route::get('/{id}','Home\MarcheController@edit')->name('marche.edit');
    Route::put('/{id}','Home\MarcheController@update')->name('marche.update');
    Route::delete('/{id}','Home\MarcheController@destroy')->name('marche.destroy');
});




Route::group(['prefix'=>'agent'], function(){

    Route::get('/commercial', 'Agent\CommercialController@index')->name('commercial.home');

    Route::get('/commercial-create', 'Agent\CommercialController@create');
    Route::post('/commercial-create', 'Agent\CommercialController@store')->name('commercial.store');
    Route::post('/commercial-create', 'Agent\CommercialController@store')->name('commercial.store');

    Route::get('commercial/{id}','Agent\CommercialController@show')->name('commercial.show');
    Route::get('commercial/{id}/edit','Agent\CommercialController@edit')->name('commercial.edit');
   // Route::get('/{id}','Home\MarcheController@edit')->name('marche.edit');
    Route::put('commercial/{id}','Agent\CommercialController@update')->name('commercial.update');

    Route::delete('commercial/{id}','Agent\CommercialController@destroy')->name('commercial.destroy');




    Route::get('/controlleur', 'Agent\ControlleurController@index')->name('controlleur.home');

    Route::get('/controlleur-create', 'Agent\ControlleurController@create');
    Route::post('/controlleur-create', 'Agent\ControlleurController@store')->name('controlleur.store');
    Route::post('/controlleur-create', 'Agent\ControlleurController@store')->name('controlleur.store');

    Route::get('controlleur/{id}','Agent\ControlleurController@show')->name('controlleur.show');
    Route::get('controlleur/{id}/edit','Agent\ControlleurController@edit')->name('controlleur.edit');
   // Route::get('/{id}','Home\MarcheController@edit')->name('marche.edit');
    Route::put('controlleur/{id}','Agent\ControlleurController@update')->name('controlleur.update');
    Route::delete('controlleur/{id}','Agent\ControlleurController@destroy')->name('controlleur.destroy');

    //controlleurs


    Route::get('/commercial', 'Agent\CommercialController@index')->name('commercial.home');

    Route::get('/commercial-create', 'Agent\CommercialController@create');
    Route::post('/commercial-create', 'Agent\CommercialController@store')->name('commercial.store');
    Route::post('/commercial-create', 'Agent\CommercialController@store')->name('commercial.store');
    Route::delete('commercial/{id}','Agent\CommercialController@destroy')->name('commercial.destroy');

});

/**
https://auth0.com/blog/build-a-laravel-6-app-with-authentication/



https://www.techiediaries.com/laravel/php-laravel-7-6-tutorial-crud-example-app-bootstrap-4-mysql-database/


https://www.itsolutionstuff.com/post/laravel-6-crud-application-tutorialexample.html
**/
