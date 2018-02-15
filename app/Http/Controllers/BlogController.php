<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public static function getBlogPages()
    {
        $limit = 5;
        $blog_pages = ceil(Blog::count() / $limit);
        return $blog_pages;
    }

    public static function getBlogs()
    {
        $blogs = Blog::select('*')->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

    public static function getBlogByPage($page)
    {
        $limit = 5;
        $page -= 1;

        $blogs = Blog::select('*')->offset($limit * $page)->limit($limit)
            ->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

    public static function getBlogByID($id)
    {
        $blog = Blog::where('id', $id)->first();
        return $blog;
    }

    public static function getPublishedBlogs()
    {
        $blogs = Blog::where('published', true)->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

    public static function getNonPublishedBlogs()
    {
        $blogs = Blog::where('published', false)->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

    public static function getArchivedBlogs()
    {
        $blogs = Blog::where('archived', true)->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

    public static function getNonArchivedBlogs()
    {
        $blogs = Blog::where('archived', false)->orderBy('created_at', 'desc')->get();
        return $blogs;
    }

    /* Testing Purposes */
    public function showPost(Request $request)
    {
        $content = $request->content;
        return view('/admin/blog_create')->with('content', $content);
    }

    public function createBlog(Request $request)
    {
        try {
            $content = $request->content;
            if (strlen($content) < 1) {
                session()->flash('response_success', false);
                session()->flash('response', 'Failed to create blog. Blog content is empty.');
                return back();
            }

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->published = true;

            if ($blog->save()) {
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $image->move(public_path() . '/img_blog/', $blog->id . '.' . $image->getClientOriginalExtension());
                }

                $blog->cover_url = $blog->id . '.' . $image->getClientOriginalExtension();
                $blog->save();

                session()->flash('response_success', true);
                session()->flash('response', 'Blog successfully created.');
            }
        } catch (\Exception $exception) {
            session()->flash('response_success', false);
            session()->flash('response', 'Failed to create blog. Please try again.');
        }

        return back();
    }

    public function archiveBlog(Request $request)
    {
        $id = $request->blog_id;
        try {
            DB::transaction(function () use ($id) {
                $blog = Blog::find($id);
                $blog->archived = true;
                $blog->save();
            });

            session()->flash('response_success', true);
            session()->flash('response', 'Blog successfully archived.');
        } catch (\Exception $exception) {
            session()->flash('response_success', false);
            session()->flash('response', 'Failed to archive blog. Please try again.');
        }

        return back();
    }

}
