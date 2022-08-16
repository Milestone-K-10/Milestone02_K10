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
Route::get('/report', 'ReportController@store');
Route::get('/','ReportController@index');
Route::get('/report/{id}','ReportController@show');
Route::get('/search','ReportController@search');
Route::get('/report/{id}/verification','AdminController@verification')->middleware('role');
Route::get('/unverified-reports','AdminController@unverifiedReports')->middleware('role');
Route::get('/community', function() {
    return view('community/community');
});
Route::get('/about', function() {
    return view('/about');
});
Route::get('/settings', function() {
    return view('/account');
});
Route::post('/verifyreport/{id}','AdminController@verification')->middleware('role');
Route::post('/unverify-report/{id}','AdminController@unverify')->middleware('role');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
