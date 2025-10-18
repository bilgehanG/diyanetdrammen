<?php

namespace App\Http\Controllers;

use App\Support\SocietyContent;
use Illuminate\View\View;

class DocumentsPageController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.documents', [
            'documents' => SocietyContent::documents(),
            'contact' => SocietyContent::contact(),
        ]);
    }
}
