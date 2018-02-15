<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        try {
            $admin = Admin::where('username', $request->username)->where('password', md5($request->password))->firstOrFail();
            if ($admin != null) {
                session()->put('logged_as_admin', true);

                session()->flash('response_success', true);
                session()->flash('response', 'Login successful.');
                return redirect('/admin');
            } else {
                throw new \Exception();
            }
        } catch (\Exception $exception) {
            session()->flash('response_success', false);
            session()->flash('response', 'Login failed. Invalid username/password.');
            return redirect('/admin/login');
        }
    }
}
