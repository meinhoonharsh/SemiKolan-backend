<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getAllPosts()
    {
        $posts = Post::where('active', true)->get();
        return $this->sendResponse($posts, 'Posts retrieved successfully.');
    }
}
