<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private static $post;

    public  static  function newPost($request)
    {
        self::$post = new Post();
        self::$post->title = $request->title;
        self::$post->description = $request->description;
        self::$post->save();
        return self::$post;

    }
    public  static  function updatePost($request , $id)
    {
        self::$post = Post::find($id);
        self::$post->title = $request->title;
        self::$post->description = $request->description;
        self::$post->update();
        return self::$post;

    }
    public  static  function updatePostStatus($request , $id)
    {
        self::$post = Post::find($id);
        self::$post->status = $request->status;
        self::$post->update();
        return self::$post;

    }
}
