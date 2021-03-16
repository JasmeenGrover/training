<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostController extends Controller
{
  public function show($slug)
  {
    // code...open .env
    // return 'God';

  //  $post=DB::table('posts')->where('slug', $slug)->first();
    // dd($post);

    $post = Post::where('slug',$slug)->firstOrFail();

    // if (! $post) {
    //   // code...
    //   abort(404);
    // }

      // $posts = [
      //    'my-post' => 'Hello, welcome to my blog',
      //   'your-post' => 'Hello, i would love to be here.'
      // ];
      //
      // if (! array_key_exists($post,$posts)) {
      //   // code...
      //   abort(404, 'Post not found.');
      // }
      // return $post;
      return view('post',[
        'post' => $post
      ]);

  }
}
