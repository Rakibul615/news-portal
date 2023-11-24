<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $this->posts = Post::where('status', 'approve')->get();
        return view('welcome', ['posts' => $this->posts]);

    }

}
