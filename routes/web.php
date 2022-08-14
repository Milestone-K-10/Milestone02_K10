<?php

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
use Illuminate\Support\Facades\Route;


Route::get('/report/create','ReportController@create');
Route::post('/report', 'ReportController@store');
Route::get('/','ReportController@index');
Route::get('/report/{id}','ReportController@show');
Route::get('/search','ReportController@search');
Route::get('/report/{id}/verification','ReportController@verification')->middleware('role');
Route::get('/unverified-reports','ReportController@unverifiedReports')->middleware('role');

<<<<<<< HEAD
Route::get('/community', function() {return view('community/community');});
Route::get('/about', function() {return view('/about');});
=======
>>>>>>> 22be9151cf02288dab2efbc5dad07886a97a099e
Route::post('/verifyreport/{id}','ReportController@verification');
Route::post('/unverify-report/{id}','ReportController@unverify');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');