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

// Route::get('/', function () {
//   $name = request('name');
//   // return $name;
//     return view('test',[
//       'name' => $name
//     ]);
// });

  // Route::get('/posts/{post}',function($post){
  //   $posts = [
  //      'my-post' => 'Hello, welcome to my blog',
  //     'your-post' => 'Hello, i would love to be here.'
  //   ];
  //
  //   if (! array_key_exists($post,$posts)) {
  //     // code...
  //     abort(404, 'Post not found.');
  //   }
  //   // return $post;
  //   return view('post',[
  //     'post' => $posts[$post]
  //   ]);
  // });

  // Route::get('/posts/{post}', 'PostsController@show');
  // Route::get('/posts/{post}', 'PostController@show');

  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/', function () {
      return view('contact');
  });

  
