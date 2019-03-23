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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'events'], function () {
  Route::get('register', function () {
      return view('users/register');
  });
  Route::get('signin', function () {
      return view('users/signin');
  });
});


Route::group(['prefix' => 'events'], function () {
  Route::get('view', function () {
      return view('index');
  });
  Route::get('all/{category}', function () {
      return view('events/all');
  });
  Route::get('new', function () {
      return view('events/new');
  });
  Route::get('edit', function () {
      return view('events/edit');
  });
});
