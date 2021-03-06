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

Route::get('/', function ()
{
	return view('welcome');
});


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::get('profile/{slug}', 'ProfileController@index');
	Route::get('/changePhoto', function() {
	    return view('profile.pic');
	})->name('profile');
	Route::post('/uploadPhoto', 'ProfileController@uploadPhoto');

	Route::get('/editProfile', 'ProfileController@editProfile')->name('editProfile');
	Route::post('/updateProfile', 'ProfileController@updateProfile');

	Route::get('/findFriends', 'ProfileController@findFriends');
	Route::get('/addFriend/{id}', 'ProfileController@sendRequest');

});



