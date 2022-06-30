<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getAllPosts()
    {
        $posts = Posts::where('active', true)->get();
        return $this->sendResponse($posts, 'Posts retrieved successfully.');
    }
}
