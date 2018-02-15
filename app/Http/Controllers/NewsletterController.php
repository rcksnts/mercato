<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public static function getNewsletterPages()
    {
        $limit = 2;
        $pages = floor(Newsletter::count() / $limit);
        return $pages;
    }

    public static function getNewsletters()
    {
        $newsletters = Newsletter::all();
        return $newsletters;
    }

    public static function getNewsletterPage($page)
    {
        $limit = 20;
        $newsletters = Newsletter::offset($page)->limit($limit)->get();
        return $newsletters;
    }

    public function signup(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;

        if ($newsletter->save()) {
            session()->flash('response_success', true);
            session()->flash('response', 'Successfully signed up for newsletters.');
        } else {
            session()->flash('response_success', true);
            session()->flash('response', 'Failed up sign up for newsletter.');
        }

        return back();
    }
}
