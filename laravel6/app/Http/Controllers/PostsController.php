<?php



namespace App\Http\Controllers;

class PostsController
{
  public function show($post)
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
