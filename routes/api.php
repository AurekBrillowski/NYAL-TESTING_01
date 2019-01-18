<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



// ======================================================================
// EVENT_NAMES
// ======================================================================
Route::get('nyal_athletes', 'NyalAthleteController@index');
Route::get('nyal_athlete/{id}', 'NyalAthleteController@show');
Route::post('nyal_athlete', 'NyalAthleteController@store');
Route::put('nyal_athlete', 'NyalAthleteController@store');
Route::delete('nyal_athlete/{id}', 'NyalAthleteController@destroy');
// ______________________________________________________________________



// List conferences...
Route::get('conferences', 'NyalConferenceController@index');

// List a single conference...
Route::get('conference/{id}', 'NyalConferenceController@show');

// Create a new conference...
Route::post('conference', 'NyalConferenceController@store');

// Update an existing conference...
Route::put('conference', 'NyalConferenceController@store');

// DELETE a Conference...
Route::delete('conference/{id}', 'NyalConferenceController@destroy');




// ======================================================================
// EVENT_ORGANIZATIONS
// ======================================================================

// List Event Organizations...
Route::get('event_org', 'EventOrganizationController@index');

// List a single Event Organization...
Route::get('event_org/{id}', 'EventOrganizationController@show');

// Create a new Event Organization...
Route::post('event_org', 'EventOrganizationController@store');

// Update an existing Event Organization...
Route::put('event_org', 'EventOrganizationController@store');

// DELETE a Event Organization...
Route::delete('event_org/{id}', 'EventOrganizationController@destroy');
// ______________________________________________________________________


// ======================================================================
// EVENT_NAMES
// ======================================================================
Route::get('event_name', 'EventNameController@index');
Route::get('event_name/{id}', 'EventNameController@show');
Route::post('event_name', 'EventNameController@store');
Route::put('event_name', 'EventNameController@store');
Route::delete('event_name/{id}', 'EventNameController@destroy');
// ______________________________________________________________________




// Update article...
// Route::put('article', 'ArticleController@store');

// Delete article...
// Route::delete('article/{id}', 'ArticleController@destroy');





Route::get('test', function() {
    // dd(DB::connection('NYAL-Oracle')->\App\NyalConference::all();
    return \App\NyalConference::all();
    // dd->\App\NyalConference::all();
});

Route::get('conf', 'NyalConferenceController@tester');
