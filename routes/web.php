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
Route::get('homeadmin','SlideController@index');


Route::get('recrutadmin','RecrutementController@index');
Route::get('contact','ContactController@index');

Route::post('homeadmin','SlideController@store');



Route::post('contact','ContactController@store');

Route::post('recrutadmin','RecrutementController@store');


Route::post('cap','CapacityController@store');
Route::post('inst','InstalationController@store');



/*
Route::post('/', function () {
    return view('frontend.welcome');
});

Route::post('votreprojet', function () {
    return view('frontend.votreprojet');
});


Route::post('budget', function () {
    return view('frontend.budget');
});


Route::post('mesure', function () {
    return view('frontend.mesure');
});



Route::post('pose', function () {
    return view('frontend.pose');
});



Route::post('sav', function () {
    return view('frontend.sav');
});


Route::post('contact', function () {
    return view('frontend.contact');
});


Route::post('services', function () {
    return view('frontend.services');
});



Route::post('cons', function () {
    return view('frontend.cons');
});


Route::post('recrutement', function () {
    return view('frontend.recrutement');
});

Route::post('homeadmin', function () {
    return view('backend.homeadmin');
});
*/
