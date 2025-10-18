<?php

namespace App\Http\Controllers;

use App\Support\SocietyContent;
use Illuminate\View\View;

class AboutPageController extends Controller
{
    public function __invoke(): View
    {
        $mission = SocietyContent::mission();

        return view('pages.about', [
            'about' => SocietyContent::about(),
            'mission' => $mission,
            'values' => $mission['values'],
        ]);
    }
}
