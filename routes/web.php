<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');});
Route::get('/about', function () { return view('pages.about');});
Route::get('/construction', function (){ return view('pages.construction');});
Route::get('/architecture', function (){ return view('pages.house-plan');});
Route::get('/land-surveying', function (){ return view('pages.land-survey');});
Route::get('/education-and-training', function (){ return view('pages.education-and-training');});
Route::get('/property-and-asset', function (){ return view('pages.property');});
Route::get('/recruitment', function (){ return view('pages.recruitment');});
Route::get('/physical-planning', function (){ return view('pages.physical-planning');});
Route::get('/estates', function (){ return view('pages.estates');});
Route::get('/general-engineering', function (){ return view('pages.general-engineering');});
Route::get('/agriculture', function (){ return view('pages.agriculture');});
Route::get('/microfinance', function (){ return view('pages.microfinance');});
Route::get('/general-supplies', function (){ return view('pages.general-supplies');});
Route::get('/projects', function (){ return view('pages.projects');});
Route::get('/blog', function (){ return view('pages.blog');});
Route::get('contact', function (){ return view('pages.contact');});
Route::get('/career', function (){ return view('pages.career');});
Route::get('/branches', function (){ return view('pages.branches');});
Route::get('/services', function (){ return view('pages.services');});
Route::get('/post', function (){ return view('pages.post');});
Route::get('/materials', function (){ return view('pages.materials');});

