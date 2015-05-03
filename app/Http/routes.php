<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', 'HomeController@index');

Route::get('hierarchy', 'HierarchyController@index');

Route::get('user', 'UserController@index');

Route::get('profile', 'ProfileController@index');

Route::get('help', 'HelpController@index');

Route::get('suggest', 'SuggestController@index');

Route::get('database', function() {

    DB::insert('insert into oseba (ime, priimek, email, password) VALUES (?,?,?,?)', array('Markus', 'Skubic', 'markus@aaa.com', Hash::make('markus')));

    /*User::create([
       'email' => 'vid.aaa@gmail.com',
        'password' => Hash::make('vid'),
        'ime' => 'Vid',
        'priimek' => 'Mahovič'
    ]);*/

    return 'Done!';

});

Route::get('home', 'HomeController@index');

Route::get('home/about', 'HomeController@about');

Route::controllers([
	'auth' => 'Auth\AuthController',        //ko imamo /auth pot, klice AuthController
	'password' => 'Auth\PasswordController',
]);
