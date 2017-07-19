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

Route::resource('blog', 'PostsController');

Route::get('/', 'HomeController@index')->name('home');

// Authentification
Route::get('/register', 'Auth\RegisterController@create')->name('register.create');
Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
Route::get('/password-request', 'Auth\LoginController@lostPassword')->name('password.request');

Route::post('/register', 'Auth\RegisterController@store')->name('register.store');
Route::post('/login', 'Auth\LoginController@store')->name('login.store');

// zone admin
Route::group(['prefix' => 'admin',  'middleware' => ['role:admin']], function()
{
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');

    // route page d'accueil
    Route::resource('homepage', 'Admin\HomeController');

    // users, profile
    Route::resource('users', 'Admin\UsersController');

    // roles
    Route::resource('roles', 'RolesController');

    Route::resource('permissions', 'PermissionsController');

    Route::any('user-data', 'Admin\UsersController@ajaxListing')->name('datatables.data');

    Route::get('admin/story-amma', 'Admin\AmmastoryController@index')->name('story-amma.index');
    Route::get('admin/blog-admin', 'Admin\PostsController@index')->name('blog-admin.index');
});



