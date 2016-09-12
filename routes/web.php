<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

#region Home
Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
#endregion

#region About
Route::get('about', 'PagesController@aboutOverview');
Route::get('about/new-here', 'PagesController@aboutNewHere');
Route::get('about/staff', 'PagesController@aboutStaff');
Route::get('about/overview', 'PagesController@aboutOverview');
#endregion

#region Contact
Route::get('contact', 'PagesController@contact');
#endregion

#region Errors
Route::get('errors/404', 'PagesController@error404');

Route::get('errors/503', 'PagesController@error503');
#endregion

#region Events
Route::get('events', 'PagesController@listEvents');
Route::get('events/index', 'PagesController@listEvents');
#endregion

#region Users
Route::get('users', 'PagesController@listUsers');
Route::get('users/index', 'PagesController@listUsers');
#endregion