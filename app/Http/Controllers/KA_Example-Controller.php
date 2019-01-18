<?php

namespace App\Http\Controllers;

use App\EventName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // Added by KA when needed.
use Carbon\Carbon;  // Added by KA when needed.

class EventNameController extends Controller
{
    
    /******************************************************************************************/
    /***  Retrieve ALL Items  ***/
    /******************************************************************************************/
    public function index() {

        return EventName::all();

    } // ------------------------------------------------------------------------------------ */


    /******************************************************************************************/
    /***  Retrieve a SINGLE Item  ***/
    /******************************************************************************************/
    public function show($id) {

        return EventName::findOrFail($id);

    } //---------------------------------------------------------------------------------------/
    

    /******************************************************************************************/
    /***  DELETE an Item  ***/
    /******************************************************************************************/
    public function destroy($id) {

        $toDelete = EventName::findOrFail($id);
        if ($toDelete->delete()) {
            return $toDelete;
        }
    } //---------------------------------------------------------------------------------------/


    /******************************************************************************************/
    /***  CREATE (POST) a flg_confirmed Item ***/
    /* or UPDATE (PUT) an EXISTING Item
    /******************************************************************************************/
    public function store(Request $request) {

        if ($request->isMethod('post')) {
            $modelInstance = new EventName();

            $modelInstance->event_name = $request->input('event_name');
            $modelInstance->alpha_sort_name = $request->input('alpha_sort_name');
            $modelInstance->race_website = $request->input('race_website');
            $modelInstance->id_nyal_season = $request->input('id_nyal_season');
            $modelInstance->id_month = $request->input('id_month');
            $modelInstance->flg_club_race = $request->input('flg_club_race');
            $modelInstance->flg_school_race = $request->input('flg_school_race');
            $modelInstance->dt_updated_on = $request->input('dt_updated_on');
            $modelInstance->flg_tentative = $request->input('flg_tentative');
            $modelInstance->flg_confirmed = $request->input('flg_confirmed');
            $modelInstance->event_organization_id = $request->input('event_organization_id');

            if ($modelInstance->save()) {
                return $modelInstance;
            } else {
                return "ERROR: Record Insert FAILED!";
            };
        }

        if ($request->isMethod('put')) {
            $modelInstance = EventName::findOrFail($request->id);

            $modelInstance->event_name = $request->input('event_name');
            $modelInstance->alpha_sort_name = $request->input('alpha_sort_name');
            $modelInstance->race_website = $request->input('race_website');
            $modelInstance->id_nyal_season = $request->input('id_nyal_season');
            $modelInstance->id_month = $request->input('id_month');
            $modelInstance->flg_club_race = $request->input('flg_club_race');
            $modelInstance->flg_school_race = $request->input('flg_school_race');
            $modelInstance->dt_updated_on = $request->input('dt_updated_on');
            $modelInstance->flg_tentative = $request->input('flg_tentative');
            $modelInstance->flg_confirmed = $request->input('flg_confirmed');
            $modelInstance->event_organization_id = $request->input('event_organization_id');

            if ($modelInstance->save()) {
                return $modelInstance;
            } else {
                return "ERROR: Record Update FAILED!";
            }
        }
    } //---------------------------------------------------------------------------------------/
}