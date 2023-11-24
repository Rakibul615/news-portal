<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $this->posts = Post::where('status', 'pending')->get();
        return view('super-admin.index', ['posts' => $this->posts]);
    }
    public function edit($id)
    {
        $this->post = Post::find($id);
        return view('super-admin.edit', ['post' =>  $this->post]);

    }
    public function update(Request $request, $id)
    {
        return $request;
        Post::updatePostStatus($request,$id);
        return redirect()->route('super-admin.index');
    }
}
