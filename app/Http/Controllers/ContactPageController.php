<?php

namespace App\Http\Controllers;

use App\Support\SocietyContent;
use Illuminate\View\View;

class ContactPageController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.contact', [
            'contact' => SocietyContent::contact(),
            'socialLinks' => SocietyContent::socialLinks(),
        ]);
    }
}
