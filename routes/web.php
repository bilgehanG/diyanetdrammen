<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ActivitiesPageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\DocumentsPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ManagementPageController;
use App\Http\Controllers\ReligiousServicesPageController;
use Illuminate\Support\Facades\Route;

$landingRoute = (string) config('app.landing_page_route', '/no/test');
$landingPath = trim($landingRoute, '/');
$basePrefix = $landingPath === '' ? '' : '/'.$landingPath;

$pathFor = static function (string $suffix = '') use ($basePrefix): string {
    if ($basePrefix === '') {
        return $suffix === '' ? '/' : $suffix;
    }

    return $suffix === '' ? $basePrefix : $basePrefix.$suffix;
};

Route::middleware('dev.preview')->group(function () use ($pathFor) {
    Route::get($pathFor(), LandingPageController::class)->name('landing');
    Route::get($pathFor('/activities'), ActivitiesPageController::class)->name('activities');
    Route::get($pathFor('/religious-services'), ReligiousServicesPageController::class)->name('religious-services');
    Route::get($pathFor('/documents'), DocumentsPageController::class)->name('documents');
    Route::get($pathFor('/management'), ManagementPageController::class)->name('management');
    Route::get($pathFor('/about'), AboutPageController::class)->name('about');
    Route::get($pathFor('/contact'), ContactPageController::class)->name('contact');

    Route::post($pathFor('/contact'), ContactFormController::class)->name('contact.submit');
});
