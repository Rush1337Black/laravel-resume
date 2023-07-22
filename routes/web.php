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
        Route::get('/forgot/password' ,'ForgotPasswordController')->name('main.forgotPassword');
    });
});

Route::group(['namespace' => 'User'], function () {
    Route::get('/user/{user}' ,'ShowController')->name('user.show');

    Route::post('/registration' ,'RegistrationController')->name('user.registration');
    Route::post('/authorization' ,'AuthorizationController')->name('user.authorization');

    Route::group(['middleware' => 'auth'], function () {
        Route::post('/logout' ,'LogoutController')->name('user.logout');
        Route::get('/profile' ,'IndexController')->name('user.profile');

        Route::group(['namespace' => 'Setting' , 'prefix' => 'profile'], function () {
            Route::get('/setting' ,'IndexController')->name('user.setting.index');

            Route::group(['namespace' => 'Name' ], function () {
                Route::patch('/setting/name/update' ,'UpdateController')->name('user.setting.name.update');
            });

            Route::group(['namespace' => 'Email' ], function () {
                Route::get('/setting/changeMail' ,'IndexController')->name('user.setting.changeMail');
            });

            Route::group(['namespace' => 'Password' ], function () {
                Route::get('/setting/changePassword' ,'IndexController')->name('user.setting.changePassword');
            });

            Route::group(['namespace' => 'Image' ], function () {
                Route::get('/setting/changeImage' ,'IndexController')->name('user.setting.image.index');
                Route::patch('/setting/changeImage/update' ,'UpdateController')->name('user.setting.image.update');
            });
        });
    });
});
