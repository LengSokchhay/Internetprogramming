<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function showForm()
    {
        return view('cookie_form');
    }

    public function setCookie(Request $request)
    {
        $cookieName = 'my_cookie';
        $cookieValue = $request->input('cookie_value');
        $minutes = 60; // Cookie duration in minutes

        $cookie = cookie($cookieName, $cookieValue, $minutes);

        return response('Cookie has been set')->withCookie($cookie);
    }
    public function getCookie(Request $request)
    {
        $value = $request->cookie('my_cookie');

        if ($value) {
            return view('cookie_value', ['cookieValue' => $value]);
        } else {
            return "Cookie not found!";
        }
    }
}


