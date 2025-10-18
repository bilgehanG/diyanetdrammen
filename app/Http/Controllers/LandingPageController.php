<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Support\SocietyContent;

class LandingPageController extends Controller
{
    /**
     * Display the marketing landing page.
     */
    public function __invoke(): View
    {
        return view('landing', [
            'hero' => SocietyContent::hero(),
            'mission' => SocietyContent::mission(),
            'activities' => SocietyContent::activities(),
            'services' => SocietyContent::services(),
            'documents' => SocietyContent::documents(),
            'managementGroups' => SocietyContent::managementGroups(),
            'contact' => SocietyContent::contact(),
        ]);
    }
}
