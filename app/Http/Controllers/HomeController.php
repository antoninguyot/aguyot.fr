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

        if(app('translator')->getLocale() == 'fr'){
            $cv = '/pdf/CV_Antonin_Guyot.pdf';
        } else {
            $cv = '/pdf/Antonin_Guyot_Résumé.pdf';
        }

        return view('index', compact('cv'));
    }
}
