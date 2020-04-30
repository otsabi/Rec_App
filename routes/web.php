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

Route::get('/', function () {
    return view('index');
});

Route::get('/template', function () {
    return view('index');
});

<<<<<<< HEAD
// route invoice
Route::get('invoice','invoiceController@show');
=======
//Clients
Route::get('/clients/create','ClientController@create')->name('client_add');
Route::get('/clients','ClientController@index');
Route::post('clients','ClientController@store')->name('clients.store');
Route::get('clients/{id}/edit','ClientController@edit');
Route::put('clients/{id}','ClientController@update');
Route::delete('clients/{id}','ClientController@destroy');

//Paiements
Route::get('/paiements/create','PaiementController@create');
Route::get('/paiements','PaiementController@index');
Route::post('/paiements','PaiementController@store');
Route::get('/paiements/{id}/edit','PaiementController@edit');
Route::put('/paiements/{id}','PaiementController@update');
Route::delete('/paiements/{id}','PaiementsController@destroy');

//DocDetail
Route::get('/docdetail','DocDetailController@index');
Route::get('docdetail/create','DocDetailController@create');
Route::post('/docdetail','DocDetailController@store');
Route::get('/docdetail/{id}/edit','DocDetailController@edit');
Route::put('/docdetail/{id}','DocDetailController@update');
Route::delete('/docdetail/{id}','DocDetailController@destroy');


//Societe
Route::get('/societe','SocieteController@index');
Route::get('/societe/create','SocieteController@create');
Route::post('/societe','SocieteController@store');
Route::get('/societe/{id}/edit','SocieteController@edit');
Route::put('/societe/{id}','SocieteController@update');
Route::delete('/societe/{id}','SocieteController@destroy');


//Responsable
Route::get('/responsable','ResponsableController@index');
Route::get('/responsable/create','ResponsableController@create');
Route::post('/responsable','ResponsableController@store');
Route::get('/responsable/{id}/edit','ResponsableController@edit');
Route::put('/responsable/{id}','ResponsableController@update');
Route::delete('/responsable/{id}','ResponsableController@destroy');


//Document
Route::get('/document','DocumentController@index');
Route::get('/document/create','DocumentController@create');
Route::post('/document','DocumentController@store');
Route::get('/document/{id}/edit','DocumentController@edit');
Route::put('/document/{id}','DocumentController@update');
Route::delete('/document/{id}','DocumentController@destroy');


//LigneDocument
Route::get('/lignedocument','LigneDocumentController@index');
Route::get('/lignedocument/create','LigneDocumentController@create');
Route::post('/lignedocument','LigneDocumentController@store');
Route::get('/lignedocument/{id}/edit','LigneDocumentController@edit');
Route::put('/lignedocument/{id}','LigneDocumentController@update');
Route::delete('/lignedocument/{id}','LigneDocumentController@destroy');
>>>>>>> 8433eec57413be6af0fc70811a7e84c952afb887
