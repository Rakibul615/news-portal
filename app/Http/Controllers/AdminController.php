<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $this->posts = Post::get();
        return view('admin.index', ['posts' => $this->posts]);
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
//       return $request;
        Post::newPost($request);
        return redirect()->route('admin.index');
    }
    public function edit($id)
    {
        $this->post = Post::find($id);
        return view('admin.edit', ['post' =>  $this->post]);

    }

    public function update(Request $request, $id)
    {
        Post::updatePost($request,$id);
        return redirect()->route('admin.index');
    }

    public function delete($id)
    {
        $this->info = Post::find($id);
        $this->info->delete();
        return redirect()->route('admin.index');

    }

}
