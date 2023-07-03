<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => '' ], function () {

    Route::group(['namespace' => 'Main' ], function () {
        Route::get('/' ,'IndexController')->name('main');
        Route::get('/registration' ,'RegistrationController')->name('main.registration');
        Route::get('/authorization' ,'AuthorizationController')->name('main.authorization');

        Route::get('/profile' ,'ProfileController')->name('user.profile');
        Route::get('/settings' ,'SettingsController')->name('user.settings');
    });
});
