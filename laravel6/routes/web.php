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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/welcome', function () {
//     return view('welcome');
// });
//
// Route::get('/', function () {
//     return 'Hello';
// });
//
// Route::get('/', function () {
//     return ['ary' => 'god'];
// });

Route::get('/', function () {
  $name = request('name');
  // return $name;
    return view('test',[
      'name' => $name
    ]);
});
