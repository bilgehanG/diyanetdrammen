<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::middleware('dev.preview')->get(
    (string) config('app.landing_page_route', '/no/test'),
    LandingPageController::class
);
