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

Route::get('/deleteref/{id}','ReferenceController@delete');

Route::get('/deleteslide/{id}','SlideController@delete');

Route::get('/deleteinst/{id}','InstalationController@delete');

Route::get('/deleterect/{id}','RecrutementController@delete');
Route::get('/deletecont/{id}','ContactController@delete');
Route::post('homeadmin','SlideController@store');
Route::post('contact','ContactController@store');
Route::post('recrutadmin','RecrutementController@store');
Route::post('cap','CapacityController@store');
Route::post('inst','InstalationController@store');

Route::post('ref','ReferenceController@store');

Route::get('cont','MmailController@index');
Route::post('cont','MmailController@store');
Route::get('devis','MmailController@affiche');
Route::post('devis','MmailController@send');
Route::get('newsletter','NewsletterController@index');

Route::post('newslt','NewsletterController@store');
Route::post('/deletenews/{id}','NewsletterController@delete');





Route::get('/', 'SlideController@affiche');


Route::get('votreprojet', function () {
    return view('frontend.votreprojet');
});


Route::get('budget', function () {
    return view('frontend.budget');
});


Route::get('mesure', function () {
    return view('frontend.mesure');
});



Route::get('pose', function () {
    return view('frontend.pose');
});



Route::get('sav', function () {
    return view('frontend.sav');
});





Route::get('services', function () {
    return view('frontend.services');
});



Route::get('cons', function () {
    return view('frontend.cons');
});


Route::get('recrutement', function () {
    return view('frontend.recrutement');
});
/*
Route::post('homeadmin', function () {
    return view('backend.homeadmin');
});
Route::post('contact', function () {
    return view('frontend.contact');
});

 */
