<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::middleware('dev.preview')->get('/no/test', LandingPageController::class);
