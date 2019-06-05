<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
// });

// Route::get('/users', function () {
//    return factory('App\User', 10)->make();
// });

// Route::get('/users', function () {
//    if (rand(1, 10) < 3) {
//       abort(500, 'We could not retrieve the users');
//    }

//    return factory('App\User', 10)->make();
// });

Route::namespace('Api')->group(function () {
   Route::get('/users', 'UsersController@index');

   Route::get('/users/{user}', 'UsersController@show');

   Route::put('/users/{user}', 'UsersController@update');

   Route::delete('/users/{user}', 'UsersController@destroy');
});

Route::namespace('Api')->group(function () {
   Route::get('/test', 'TestController@index');

   Route::post('/test', 'TestController@store');

   Route::get('/test/{test}', 'TestController@show');

   Route::put('/test/{test}', 'TestController@update');

   Route::delete('/test/{test}', 'TestController@destroy');
});
