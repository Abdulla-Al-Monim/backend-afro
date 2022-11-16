<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IndexController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('home',[IndexController::class,'home']);
Route::get('about',[IndexController::class,'about']);
Route::get('where-we-work',[IndexController::class,'where']);
Route::get('solution',[IndexController::class,'solution']);
Route::get('partner',[IndexController::class,'partner']);
Route::get('sustainability',[IndexController::class,'sustainability']);
Route::get('theme',[IndexController::class,'theme']);
Route::get('index-header',[IndexController::class,'header']);
Route::get('index-header-button',[IndexController::class,'headerButton']);
Route::get('index-solution',[IndexController::class,'solution']);
Route::get('index-service',[IndexController::class,'service']);
Route::get('index-service-slider',[IndexController::class,'serviceSlider']);
Route::get('index-approach',[IndexController::class,'approach']);
Route::get('index-review',[IndexController::class,'review']);
Route::get('index-review-slider',[IndexController::class,'reviewSlider']);
Route::get('index-academy',[IndexController::class,'academy']);
Route::get('index-partner',[IndexController::class,'partner']);
Route::get('index-partner-slider',[IndexController::class,'partnerSlider']);
Route::post('news-letter',[IndexController::class,'newsletter']);
Route::post('contact',[IndexController::class,'contact']);
Route::get('all-company',[IndexController::class,'allCompany']);
Route::get('all-project/{id?}',[IndexController::class,'allProject']);
Route::get('all-region/{id?}/',[IndexController::class,'allRegin']);
Route::get('project-details/{id}',[IndexController::class,'projectDetails']);
Route::get('service-details/{id}',[IndexController::class,'service']);
Route::get('service-slider-details/{id}',[IndexController::class,'serviceSliderDetails']);
Route::get('magazine',[IndexController::class,'magazine']);
Route::get('magazine-details/{id}',[IndexController::class,'magazineDetails']);


Route::get('medias/{id?}',[IndexController::class,'media']);
Route::get('media-details/{id}',[IndexController::class,'mediaDetails']);
Route::get('media-library-downolad/{id}',[IndexController::class,'libraryDownload']);
Route::get('media-library-video-downolad/{id}',[IndexController::class,'libraryVideoDownload']);
Route::get('reviews',[IndexController::class,'reviews']);
Route::get('media-center',[IndexController::class,'mediaCenter']);
Route::get('contact-country',[IndexController::class,'allContactCountry']);

Route::get('presentation-slight-download/{id}',[IndexController::class,'aboutPresentationDownload']);
Route::get('government-report-download/{id}',[IndexController::class,'aboutGovernmentReportDownload']);
Route::get('key-material-download/{id}',[IndexController::class,'sustainabilityKeymaterialDownload']);
Route::get('contact-country-view/{id}',[IndexController::class,'contactCountry']);
Route::get('client-all-project/{id}',[IndexController::class,'reviewProject']);
Route::get('country-all-project/{id}',[IndexController::class,'countryProject']);
Route::post('cv-store-s',[IndexController::class,'cvStore']);
Route::get('banner',[IndexController::class,'banner']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
