<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request, $locale = null)
    {
        if(isset($locale)){
            app('translator')->setLocale($locale);
        } else {
            app('translator')->setLocale($request->getPreferredLanguage());
        }

        return view('index');
    }
}
