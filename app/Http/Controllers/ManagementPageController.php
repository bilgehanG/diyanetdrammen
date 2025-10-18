<?php

namespace App\Http\Controllers;

use App\Support\SocietyContent;
use Illuminate\View\View;

class ManagementPageController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.management', [
            'managementGroups' => SocietyContent::managementGroups(),
        ]);
    }
}
