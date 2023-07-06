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

Route::group(['namespace' => '' ], function () {
    Route::group(['namespace' => 'Main' ], function () {
        Route::get('/' ,'IndexController')->name('main');
        Route::get('/registration' ,'RegistrationController')->name('main.registration');
        Route::get('/authorization' ,'AuthorizationController')->name('main.authorization');
        Route::get('/forgot.password' ,'ForgotPasswordController')->name('main.forgot.password');

        Route::group(['namespace' => 'User' ], function () {
            Route::post('/logout' ,'LogoutController')->name('user.logout');
            Route::post('/registration' ,'RegistrationController')->name('user.registration');
            Route::post('/authorization' ,'AuthorizationController')->name('user.authorization');
            Route::get('/profile' ,'ProfileController')->name('user.profile');
            Route::get('/settings' ,'SettingsController')->name('user.settings');
            Route::get('/change.mail' ,'ChangeMailController')->name('user.change.mail');
            Route::get('/change.password' ,'ChangePasswordController')->name('user.change.password');
        });
    });
});

