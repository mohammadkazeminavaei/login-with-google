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

    return view('welcome');
});

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');

// confirm password
Route::get('secret', function () {

    return 'test';
    
})->middleware(['auth' , 'password.confirm']);

// Social auth
Route::get('auth/google', 'Auth\socialAuthController@google')->name('google');
Route::get('auth/linkedin', 'Auth\socialAuthController@linkedin')->name('linkedin');
Route::get('auth/github', 'Auth\socialAuthController@github')->name('github');
Route::get('auth/twitter', 'Auth\socialAuthController@twitter')->name('twitter');

// google login
Route::get('login/google', 'Auth\GoogleAuthController@redirectToProvider')->name('auth.google');
Route::get('login/google/callback', 'Auth\GoogleAuthController@handleProviderCallback');