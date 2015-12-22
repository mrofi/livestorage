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

Route::get('/', function () {
    return view('file-bersama');
});

Route::get('/file-{file}', function ($file) {
    return $file;
});

Route::get('/folder-{folder}', function ($folder) {
    return $folder;
});

Route::get('/file', function () {
	
	$url = 'api/show';

	if (request()->has('path'))
	{
		$url = 'api/show?path='.request()->get('path');
	}

	if (request()->has('d'))
	{
		$url = 'api/show?d='.request()->get('d');
	}

	if (request()->has('f'))
	{
		$url = 'api/show?f='.request()->get('f');
	}

    return view('file-saya', compact('url'));
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
