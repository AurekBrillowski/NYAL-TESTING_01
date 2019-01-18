<?php

namespace App\Http\Controllers;

use App\EventOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventOrganizationController extends Controller
{

    /******************************************************************************************/
    /***  Retrieve ALL Items  ***/
    /******************************************************************************************/
    public function index()
    {
        return EventOrganization::all();
        // return DB::table("EVENT_ORGANIZATIONS")->get();
        // return DB::select('SELECT * FROM EVENT_ORGANIZATIONS');
    }
    /* -------------------------------------------------------------------------------------- */


    /******************************************************************************************/
    /***  Retrieve a SINGLE Item  ***/
    /******************************************************************************************/
    public function show($id)
    {
        return EventOrganization::findOrFail($id);
    }
    /* -------------------------------------------------------------------------------------- */


    /******************************************************************************************/
    /***  DELETE an Item  ***/
    /******************************************************************************************/
    public function destroy($id)
    {
        $toDelete = EventOrganization::findOrFail($id);

        if($toDelete->delete()) {
            return $toDelete;
        }
    }
    /* -------------------------------------------------------------------------------------- */



    /******************************************************************************************/
    /***  CREATE (POST) a NEW Item        
    /* or UPDATE (PUT) an EXISTING Item  
    /******************************************************************************************/

    public function store4(Request $request)
    {
        if ($request->isMethod('post')) {
            DB::table('EVENT_ORGANIZATIONS')->insertGetId(
                array(
                    'organization_name' => $request->input('organization_name'), 
                    'organization_abbreviation' => $request->input('organization_abbreviation'))
                );
        }
    }
    /* -------------------------------------------------------------------------------------- */




    /******************************************************************************************/
    /*** VERSION 1
    /***  CREATE (POST) a NEW Item        
    /* or UPDATE (PUT) an EXISTING Item  
    /******************************************************************************************/

    public function storeX1(Request $request)
    {
        if ($request->isMethod('post')) {
            if(
            DB::table('EVENT_ORGANIZATIONS')->insertGetId(
                array(
                    'organization_name' => $request->input('organization_name'), 
                    'organization_abbreviation' => $request->input('organization_abbreviation'),
                    'organization_website' => $request->input('organization_website'),
                    'contact_name' => $request->input('contact_name'),
                    'contact_phone' => $request->input('contact_phone'),
                    'rm_state' => $request->input('rm_state'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                    )
                )
                ) {
                    return "SUCCESS: Record Inserted";
                } else {
                    return "ERROR: Record insertion FAILED!";   
                };
        }

        if ($request->isMethod('put')) {

            $theOrg = EventOrganization::findOrFail($request->id);

            $theOrg->organization_name = $request->input('organization_name');
            $theOrg->organization_abbreviation = $request->input('organization_abbreviation');
            $theOrg->organization_website = $request->input('organization_website');
            $theOrg->contact_name = $request->input('contact_name');
            $theOrg->contact_phone = $request->input('contact_phone');
            $theOrg->rm_state = $request->input('rm_state');
            // $theOrg->updated_at = Carbon::now();

            if($theOrg->save()) {
                // return new ConferenceResource($conference);
                return $theOrg;
            }
        }


    }
    /* -------------------------------------------------------------------------------------- */


    /******************************************************************************************/
    /*** VERSION 2
    /***  CREATE (POST) a NEW Item        
    /* or UPDATE (PUT) an EXISTING Item  
    /******************************************************************************************/

    public function store(Request $request)
    {
        // CREATE...
        if ($request->isMethod('post')) {
            $theOrg = new EventOrganization();

            $theOrg->organization_name = $request->input('organization_name');
            $theOrg->organization_abbreviation = $request->input('organization_abbreviation');
            $theOrg->organization_website = $request->input('organization_website');
            $theOrg->contact_name = $request->input('contact_name');
            $theOrg->contact_phone = $request->input('contact_phone');
            $theOrg->rm_state = $request->input('rm_state');

            if($theOrg->save()) {
                return $theOrg;
            } else {
                return "ERROR: Record Insert FAILED!";
            };
        }

        // UPDATE...
        if ($request->isMethod('put')) {

            $theOrg = EventOrganization::findOrFail($request->id);

            $theOrg->organization_name = $request->input('organization_name');
            $theOrg->organization_abbreviation = $request->input('organization_abbreviation');
            $theOrg->organization_website = $request->input('organization_website');
            $theOrg->contact_name = $request->input('contact_name');
            $theOrg->contact_phone = $request->input('contact_phone');
            $theOrg->rm_state = $request->input('rm_state');
            // $theOrg->updated_at = Carbon::now();

            if($theOrg->save()) {
                // return new ConferenceResource($conference);
                return $theOrg;
            }
        }


    }
    /* -------------------------------------------------------------------------------------- */














    /* -------------------------------------------------------------------------------------- */
    // Version 02
    // MODIFIED "COMMENTED" WORKING MYSQL VERSION...
    public function store2(Request $request)
    {
        
        // IF: Browser Request is a PUT, meaning to UPDATE the record/row/model
        // THEN: Use the Browser-sent ID to retrieve the ENTIRE current row and STORE it to $theConference 
        if ($request->isMethod('put')) {
            $theConference = NyalConference::findOrFail($request->id);


        } else {
            $theConference = new NyalConference;
            $theConference->id = $request->input('id');
        }

        // Now $theConference contains either an instance of:
        //      1. The row being updated.
        //      2. A new mepty row.
        $theConference->id = $request->input('id');
        $theConference->conference_name = $request->input('conference_name');

        if($theConference->save()) {
            // return new ConferenceResource($conference);
            return $theConference;
        }
    }
    /* -------------------------------------------------------------------------------------- */


    /* -------------------------------------------------------------------------------------- */
    // Version 01
    // ORIGINAL "WORKING" MYSQL VERSION...
    public function store3(Request $request)
    {
        // PUT: Update
        // POST: Create
        if ($request->isMethod('put')) {
            $theConference = NyalConference::findOrFail($request->id);
        } else {
            $theConference = new NyalConference;
            // $theConference->id = $request->input('id');
        }

        // Now $theConference contains either an instance of:
        //      1. The row being updated.
        //      2. A new mepty row.
        $theConference->id = $request->input('id');
        $theConference->conference_name = $request->input('conference_name');

        if($theConference->save()) {
            // return new ConferenceResource($conference);
            return $theConference;
        }
    }
    /* -------------------------------------------------------------------------------------- */



}
