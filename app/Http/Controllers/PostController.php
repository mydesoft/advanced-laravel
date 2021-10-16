<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    public function create()
    {
        
        return view('posts.create');
    }

    public function softDelete($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

    public function restore($id)
    {
        $post = Post::where('id', $id)->withTrashed()->restore();
        
    }

    public function retrieveSoftDelete(){
        $post = Post::onlyTrashed()->get();
        return $post;
    }

    public function destroy(){

        Post::truncate();
    }
}
