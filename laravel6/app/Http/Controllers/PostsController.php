<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController
{
  public function show($posts)
  {
    // code...
    // return 'God';

      $posts = [
         'my-post' => 'Hello, welcome to my blog',
        'your-post' => 'Hello, i would love to be here.'
      ];

      if (! array_key_exists($post,$posts)) {
        // code...
        abort(404, 'Post not found.');
      }
      // return $post;
      return view('post',[
        'post' => $posts[$post]
      ]);

  }

}

 ?>
