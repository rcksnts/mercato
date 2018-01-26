<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /* Testing Purposes */
    public function showPost(Request $request)
    {
        $content = $request->content;
        return view('/admin/blog_create')->with('content', $content);
    }
}
