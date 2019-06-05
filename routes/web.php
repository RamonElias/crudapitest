<?php

// Route::get('/', function () {
//    return view('welcome');
// });

Route::redirect('/', '/test');

Route::resource('test', 'TestController');

// Route::get('/{any}', 'SpaController@index')->where('any', '.*');

// $users = \App\User::all();
// $users = \App\User::whereYear('created_at', '2016')->get();

// Route::get('/', function () {
   // return \App\User::all();
   // $users = \App\User::all();
   // $users = \App\User::whereDate('created_at', '2019-03-11')->get();
   // $users = \App\User::whereMonth('created_at', '>=', '03')->get();
   // $users = \App\User::whereDay('created_at', '11')->get();
   // $users = \App\User::whereYear('created_at', '2016')->get();
   // $users = \App\User::whereTime('created_at', '14:14:22')->get();
   // return $users;
// });

// Route::view('/', 'indexusers', ['users' => $users]);
// Route::view('/', 'indexusers', compact('users'));

// Route::get('/', function () {
//    $users = \App\User::all();

//    $condiciones = [
//       ['id', '<=', 36],
//       ['id', '>=', 36]
//    ];

//    $users = \App\User::select('id', 'name', 'email')
//                      ->where('id', '<=', 10)
//                      ->get();

//    $users = \App\User::select('id', 'name', 'email')
//                      ->where($condiciones)
//                      ->get();

//    return $users;
// });
