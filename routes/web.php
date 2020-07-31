<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('people', 'PeopleController');
Route::get('/people/{id}/header', 'PeopleController@showHeader')
    ->name('people.showHeader');
Route::get('/people/{id}/location-map', 'PeopleController@locationMap')
    ->name('people.locationMap');
Route::get('/people/{id}/interactions', 'PeopleController@interactionsFilter')
    ->name('people.interactions-filter');
Route::post('/people/{id}/interactions', 'PeopleController@interactions')
    ->name('people.interactions');
// Get interactions from a user and return as a JSON
Route::get('/people/{id}/interactionsJson', 'PeopleController@interactionsJson')
    ->name('people.interactionsJson');

Route::resource('beacon', 'BeaconController');
Route::resource('zone', 'ZoneController');
Route::resource('sector', 'SectorController');
Route::resource('gateway', 'GatewayController');
