<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingPageController extends Controller
{
    /**
     * Display the marketing landing page.
     */
    public function __invoke(): View
    {
        return view('landing');
    }
}
