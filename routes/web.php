<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Main Page */
Route::get('/', function () {
    return view('public.landing');
});

Route::get('/about-us', function () {
    return view('public.about');
});

Route::get('/blog', function () {
    return view('public.blog')
        ->with('blog_pages', \App\Http\Controllers\BlogController::getBlogPages())
        ->with('blogs', \App\Http\Controllers\BlogController::getBlogByPage(1));;
});

Route::get('/blog/page/{page}', function ($page) {
    return view('public.blog')
        ->with('blog_pages', \App\Http\Controllers\BlogController::getBlogPages())
        ->with('blogs', \App\Http\Controllers\BlogController::getBlogByPage($page));
});

Route::get('/blog/details/{id}', function ($id) {
    return view('public.blog_details')
        ->with('blog', \App\Http\Controllers\BlogController::getBlogByID($id));
});

Route::get('/market', function () {
    return view('public.market');
});

Route::get('/contact-us', function () {
    return view('public.contact');
});

Route::post('/newsletter/signup', 'NewsletterController@signup');

Route::post('/taste-test/submit', 'TasteTestController@createTasteTest');


Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', 'AdminController@login');

Route::middleware('admin')->group(function () {
    /* Admin */

    Route::get('/admin', function () {
        return view('admin.landing');
    });

    Route::get('/admin/logout', function () {
        \Illuminate\Support\Facades\Session::flush();
        return redirect('/');
    });

    /* Admin - Blog */

    Route::get('/admin/blogs', function () {
        return view('admin.blogs.blogs')
            ->with('blog_pages', \App\Http\Controllers\BlogController::getBlogPages())
            ->with('blogs', \App\Http\Controllers\BlogController::getBlogByPage(1));
    });

    Route::get('/admin/blogs/page/{page}', function ($page) {
        return view('admin.blogs.blogs')
            ->with('page', $page)
            ->with('blog_pages', \App\Http\Controllers\BlogController::getBlogPages())
            ->with('blogs', \App\Http\Controllers\BlogController::getBlogByPage($page));
    });

    Route::get('/admin/blogs/details/{id}', function ($id) {
        return view('admin.blogs.blog_details')
            ->with('blog', \App\Http\Controllers\BlogController::getBlogByID($id));
    });

//Route::get('/admin/blogs/{id}', function ($id) {
//    return view('admin.blogs.blog_details')
//        ->with('blog', \App\Http\Controllers\BlogController::getBlogByID($id));
//});

    Route::get('/admin/blogs/create/', function () {
        return view('admin.blogs.blogs_create');
    });

    Route::get('/admin/blogs/archive/', function () {
        return view('admin.blogs.blogs_archive')
            ->with('blogs', \App\Http\Controllers\BlogController::getNonArchivedBlogs());
    });

    Route::post('/admin/blogs/create', 'BlogController@createBlog');

    Route::post('/admin/blogs/archive', 'BlogController@archiveBlog');

    /* Admin - Newsletter */
    Route::get('/admin/newsletters', function () {
        return view('admin.newsletters.newsletters')
            ->with('newsletter_pages', \App\Http\Controllers\NewsletterController::getNewsletterPages())
            ->with('newsletters', \App\Http\Controllers\NewsletterController::getNewsletters());
    });

    Route::get('/admin/newsletters/{page}', function ($page) {
        return view('admin.newsletters.newsletters')
            ->with('newsletter_pages', \App\Http\Controllers\NewsletterController::getNewsletterPages())
            ->with('newsletters', \App\Http\Controllers\NewsletterController::getNewsletterPage($page));
    });

    /* Admin - Taste Test */

    Route::get('/admin/taste-tests', function () {
        return view('admin.taste_tests.taste_tests')
            ->with('taste_tests', \App\Http\Controllers\TasteTestController::getTasteTests());
    });

    Route::get('/blog/create', function () {
        return view('admin/blog_create')->with('content', '');
    });

    Route::post('/blog/create', 'BlogController@showPost');
});