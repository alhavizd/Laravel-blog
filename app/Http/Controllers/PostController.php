<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
      $posts =  Post::all();
      return view('post.posts', ['post' => $posts]);
    }

    public function store(Request $request){
      if ($request->status == 'on') {
        $request->status = 1;
      } else {
        $request->status = 0;
      }

      $slug = Str::slug($request->title);

      $post = DB::table('posts')->insert([
                'title' => $request->title,
                'content' => $request->content,
                'status' => $request->status,
                'slug' => $slug
              ]);

      return redirect('posts');
    }
}
