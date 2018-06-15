<?php

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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('acomodation/detail/{id}', 'Acomodation\DetailController@detail')->name('detail.acomodation');

/**
 * Register the typical authentication routes for an application.
 * Replacing: Auth::routes();
 */
Route::group(['namespace' => 'Auth'], function () {
    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    if (config('adminlte.registration_open')) {
        $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'RegisterController@register');
    }

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');
});

// Redirect to /dashboard
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Requires authentication.
 */
Route::group(['middleware' => 'auth'], function () {

    Route::post('/register/pet', 'Dashboard\IndexController@registerPet')->name('register.pet');

    Route::get('/acomodation/reserve/{id}', 'Acomodation\AcomodationController@reserveIndex')->name('reserve.acomodation');

    Route::get('/acomodation/reserve/{hotel_id}/confirmation/{pet_id}', 'Acomodation\AcomodationController@reserveConfirmation')->name('reserve.confirmation');

    Route::get('/user/reserve', 'Dashboard\IndexController@reserve')->name('user.reserve');

    /**
     * Dashboard. Common access.
     * // Matches The "/dashboard/*" URLs
     */
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'as' => 'dashboard::'], function () {
        /**
         * Dashboard Index
         * // Route named "dashboard::index"
         */
        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

        /**
         * Profile
         * // Route named "dashboard::profile"
         */
        Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@showProfile']);
        Route::post('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@updateProfile']);
    });

    /**
     * // Matches The "/admin/*" URLs
     */
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin::'], function () {
        /**
         * Admin Access
         */
        Route::group(['middleware' => 'admin'], function () {
            /**
             * Admin Index
             * // Route named "admin::index"
             */
            Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

            /**
             * Manage Users.
             * // Routes name "admin.users.*"
             */
            Route::resource('users', 'UsersController');
        });
    });

    Route::get('/acomodation', 'Acomodation\AcomodationController@index')->name('index.comodation');
    Route::get('/acomodation/register', 'Acomodation\AcomodationController@indexRegister')->name('index.register.comodation');
    Route::post('/acomodation/register/action', 'Acomodation\AcomodationController@register')->name('register.acomodation');

});
