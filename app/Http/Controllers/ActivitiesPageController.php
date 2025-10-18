<?php

namespace App\Http\Controllers;

use App\Support\SocietyContent;
use Illuminate\View\View;

class ActivitiesPageController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.activities', [
            'activities' => SocietyContent::activities(),
        ]);
    }
}
