<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    /**
     * Display the impressum page.
     *
     * @return \Illuminate\View\View
     */
    public function impressum()
    {
        return view('legal.impressum');
    }

    /**
     * Display the privacy policy page.
     *
     * @return \Illuminate\View\View
     */
    public function privacyPolicy()
    {
        return view('legal.privacy-policy');
    }
}
