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

Route::get('/', 'HomeController@index')->name('home');

Route::get('blog', 'PostsController@index')->name('front-blog.index');
Route::get('blog/{post}', 'PostsController@show')->name('front.blog.show');

Route::get('histoire-amma', 'AmmastoryController@index')->name('front-amma-story.index');

// Authentification
Route::get('/login', 'Auth\LoginController@create')->name('login');
Route::get('/logout', 'Auth\LoginController@destroy')->name('logout');
Route::post('/login', 'Auth\LoginController@store')->name('login.store');

// zone admin
Route::group(['prefix' => 'admin',  'middleware' => ['role:admin']], function()
{
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');

    // route page d'accueil
    Route::resource('homepage', 'Admin\HomeController');

    // users, profile
    Route::resource('users', 'Admin\UsersController');

    // amma-story
    Route::resource('amma-story', 'Admin\AmmastoryController');

    // roles
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');

    // blog
    Route::get('blog/{blog}/delete', 'Admin\PostsController@destroy')->name('blog.destroy');
    Route::resource('blog', 'Admin\PostsController', ['except' => 'destroy']);
    Route::any('blog-data', 'Admin\PostsController@ajaxListing')->name('datatables.blogData');

    // background
    Route::resource('background', 'Admin\BackgroundController');

    Route::any('user-data', 'Admin\UsersController@ajaxListing')->name('datatables.data');
});



