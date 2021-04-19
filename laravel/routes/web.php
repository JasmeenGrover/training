<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
// Route::get('/hello', function () {
//     return view('welcome');
// });
//
// Route::get('/', function () {
//     return ['god' => 'god'];
// });

Route::get('/', function () {
    return view('code-vlog.posts');
});

Route::get('posts/{post}', function ($slug) {
  //Find a post by its slug and pass it to a view called "post"
  $post = Post::find($slug);

  return view('code-vlog.post',[
    'post' => $post
  ]);
  //return $slug;
  // $path = __DIR__ . "/../resources/posts/{$slug}.html";
  //
  // // ddd($path);
  //
  // if (! file_exists($path)) {
  // // dd('file does not exist');
  // // ddd('file does not exist');
  // // abort(404);
  // return redirect('/');
  // }
  //
  // $post = cache()->remember("posts.{$slug}",1200,function() use($path){
  //   var_dump('file_get_contents');
  //   return file_get_contents($path);
  // });
  // // $post = file_get_contents($path);
  //
  //   return view('code-vlog.post', [
  // // //     // 'post' => '<h1>The Merchant of Venice</h1>'
  //     'post' => $post
  //   ]);
})->where('post','[A-z_\-]+');
