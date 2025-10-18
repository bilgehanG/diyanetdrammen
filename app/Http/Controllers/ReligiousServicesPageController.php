<?php

namespace App\Http\Controllers;

use App\Support\SocietyContent;
use Illuminate\View\View;

class ReligiousServicesPageController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.religious-services', [
            'services' => SocietyContent::services(),
        ]);
    }
}
