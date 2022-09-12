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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/blog', 'BlogController@index')->name('blog'); 
    Route::get('/a-propos', 'AboutController@index')->name('about'); 
    Route::get('/posts/{post}/show', 'PostsController@show')->name('posts.show');

    // ROUTE CONTACT
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@store')->name('contact.store');
    

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/AdminConnexion', 'LoginController@show')->name('login.show');
        Route::post('/AdminConnexion', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/AdminPanel', 'CrudController@index')->name('AdminPanel');
    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         * Categorie Routes
         */
        Route::group(['prefix' => 'categorie'], function() {
            Route::get('/', 'CategorieController@index')->name('categorie.index');
            Route::get('/create', 'CategorieController@create')->name('categorie.create');
            Route::post('/create', 'CategorieController@store')->name('categorie.store');
            Route::get('/{categorie}/edit', 'CategorieController@edit')->name('categorie.edit');
            Route::patch('/{categorie}/update', 'CategorieController@update')->name('categorie.update');
            Route::delete('/{categorie}/delete', 'CategorieController@destroy')->name('categorie.destroy');
        });

        /**
         * Posts Routes
         */
        Route::group(['prefix' => 'posts'], function() {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', 'PermissionsController');
    });

});