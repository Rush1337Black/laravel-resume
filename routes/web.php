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
                Route::patch('/setting/changeMail/update' ,'UpdateController')->name('user.setting.changeMail.update');
            });

            Route::group(['namespace' => 'Password' ], function () {
                Route::get('/setting/changePassword' ,'IndexController')->name('user.setting.changePassword');
                Route::patch('/setting/changePassword/update' ,'UpdateController')->name('user.setting.changePassword.update');
            });

            Route::group(['namespace' => 'Image' ], function () {
                Route::get('/setting/changeImage' ,'IndexController')->name('user.setting.image.index');
                Route::patch('/setting/changeImage/update' ,'UpdateController')->name('user.setting.image.update');
            });
        });

        Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
            Route::get('/' ,'IndexController')->name('admin.index');

            Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'auth'], function () {
                Route::get('/' ,'IndexController')->name('admin.user.index');
                Route::get('/create' ,'CreateController')->name('admin.user.create');
                Route::post('/' ,'StoreController')->name('admin.user.store');
                Route::get('/{user}' ,'ShowController')->name('admin.user.show');
                Route::get('/{user}/edit' ,'EditController')->name('admin.user.edit');
                Route::patch('/{user}' ,'UpdateController')->name('admin.user.update');
                Route::delete('/{user}' ,'DestroyController')->name('admin.user.destroy');
            });


        });

    });

});
