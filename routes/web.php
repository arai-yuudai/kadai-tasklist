<?php


Route::get('/', 'TasksController@index');
Route::resource('tasks', 'TasksController')->middleware('auth');
   

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');


// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// Route::group(['middleware' => ['auth']], function () {
//      // Route::get('tasks', 'TasksController@index');
//      // Route::resource('tasks', 'TasksController'); 
//       Route::resource('tasks', 'TasksController', ['only' => ['index', 'show','edit','destroy','update']]);
//      // Route::resource('tasks', 'TasksController', ['only' => ['store', 'destroy']]);
// });