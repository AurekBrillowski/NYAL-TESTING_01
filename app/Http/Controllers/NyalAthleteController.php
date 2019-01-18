<?php

namespace App\Http\Controllers;

use App\NyalAthlete;
use Illuminate\Http\Request;

class NyalAthleteController extends Controller
{

    /******************************************************************************************/
    /***  Retrieve ALL Items  ***/
    /******************************************************************************************/
    public function index() {

        return NyalAthlete::all();

    } // ------------------------------------------------------------------------------------ */


    /******************************************************************************************/
    /***  Retrieve a SINGLE Item  ***/
    /******************************************************************************************/
    public function show($id) {

        return NyalAthlete::findOrFail($id);

    } //---------------------------------------------------------------------------------------/
    

    /******************************************************************************************/
    /***  DELETE an Item  ***/
    /******************************************************************************************/
    public function destroy($id) {

        $toDelete = NyalAthlete::findOrFail($id);
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
            $modelInstance = new NyalAthlete();

            $modelInstance->ath_username = $request->input('ath_username');
            $modelInstance->ATH_PASSWORD = $request->input('ATH_PASSWORD');
            $modelInstance->ATH_NAME_LAST = $request->input('ATH_NAME_LAST');
            $modelInstance->ATH_NAME_FIRST = $request->input('ATH_NAME_FIRST');
            $modelInstance->ATH_NAME_FULL = $request->input('ATH_NAME_FULL');
            $modelInstance->ath_name_informal = $request->input('ath_name_informal');
            $modelInstance->ath_name_club = $request->input('ath_name_informal');
            $modelInstance->ath_email = $request->input('ath_email');
            $modelInstance->ath_phone = $request->input('ath_email');

            $modelInstance->ath_member_status = $request->input('ath_member_status');
            $modelInstance->ath_member_status_option = $request->input('ath_member_status_option');

            $modelInstance->loc_latitude = $request->input('loc_latitude');
            $modelInstance->loc_longitude = $request->input('loc_longitude');
            $modelInstance->loc_api_latlng = $request->input('loc_api_latlng');
            $modelInstance->loc_street_addr_line_1 = $request->input('loc_street_addr_line_1');
            $modelInstance->loc_street_addr_line_2 = $request->input('loc_street_addr_line_2');
            $modelInstance->loc_postal_box = $request->input('loc_postal_box');
            $modelInstance->loc_apt_suite = $request->input('loc_apt_suite');
            $modelInstance->loc_city = $request->input('loc_city');
            $modelInstance->loc_region_name = $request->input('loc_region_name');
            $modelInstance->loc_region_abbr = $request->input('loc_region_abbr');
            $modelInstance->loc_postal_code = $request->input('loc_postal_code');
            $modelInstance->loc_country_name = $request->input('loc_country_name');
            $modelInstance->loc_country_code = $request->input('loc_country_code');

            $modelInstance->cmp_gender = $request->input('cmp_gender');
            $modelInstance->cmp_dob = $request->input('cmp_dob');
            $modelInstance->cmp_age_current = $request->input('cmp_age_current');
            $modelInstance->cmp_age_end_of_year = $request->input('cmp_age_end_of_year');
            $modelInstance->cmp_age_division_team = $request->input('cmp_age_division_team');
            $modelInstance->cmp_age_division_individual = $request->input('cmp_age_division_individual');
            $modelInstance->cmp_age_division_distance = $request->input('cmp_age_division_distance');
            $modelInstance->cmp_grade = $request->input('cmp_grade');
            $modelInstance->cmp_hs_grad_year = $request->input('cmp_hs_grad_year');
            $modelInstance->cmp_collegiate_grad_year = $request->input('cmp_collegiate_grad_year');
            $modelInstance->cmp_school_id_current = $request->input('cmp_school_id_current');
            $modelInstance->cmp_school_id_next = $request->input('cmp_school_id_next');
            $modelInstance->cmp_next_race_id = $request->input('cmp_next_race_id');

            $modelInstance->flg_school_xc = $request->input('flg_school_xc');
            $modelInstance->flg_school_track = $request->input('flg_school_track');

            $modelInstance->date_of_first_inquiry = $request->input('date_of_first_inquiry');
            $modelInstance->flg_first_practice_scheduled = $request->input('flg_first_practice_scheduled');
            $modelInstance->flg_form_registration = $request->input('flg_form_registration');
            $modelInstance->flg_form_safety = $request->input('flg_form_safety');

            $modelInstance->flg_nationals_candidate = $request->input('flg_nationals_candidate');
            $modelInstance->flg_nationals_accepted = $request->input('flg_nationals_accepted');
            $modelInstance->flg_nationals_confirmed = $request->input('flg_nationals_confirmed');
            $modelInstance->flg_nationals_times_achieved = $request->input('flg_nationals_times_achieved');

            $modelInstance->potential_index = $request->input('potential_index');
            $modelInstance->performance_index = $request->input('performance_index');
            $modelInstance->commitment_index = $request->input('commitment_index');
            $modelInstance->form_index = $request->input('form_index');
            $modelInstance->conditioning_index = $request->input('conditioning_index');
            $modelInstance->mental_skills_index = $request->input('mental_skills_index');
            $modelInstance->toughness_index = $request->input('toughness_index');

            $modelInstance->flg_form_practice_needed = $request->input('flg_form_practice_needed');
            $modelInstance->flg_form_practice_scheduled = $request->input('flg_form_practice_scheduled');

            $modelInstance->nyal_conference_id = $request->input('nyal_conference_id');
            $modelInstance->nyal_region_id = $request->input('nyal_region_id');
            $modelInstance->nyal_league_id = $request->input('nyal_league_id');
            $modelInstance->nyal_division_id = $request->input('nyal_division_id');
            $modelInstance->nyal_club_id = $request->input('nyal_club_id');
            $modelInstance->practice_group_id = $request->input('practice_group_id');




            if ($modelInstance->save()) {
                return $modelInstance;
            } else {
                return "ERROR: Record Insert FAILED!";
            };
        }

        if ($request->isMethod('put')) {
            $modelInstance = NyalAthlete::findOrFail($request->id);


            $modelInstance->ath_username = $request->input('ath_username');
            $modelInstance->ATH_PASSWORD = $request->input('ATH_PASSWORD');
            $modelInstance->ATH_NAME_LAST = $request->input('ATH_NAME_LAST');
            $modelInstance->ATH_NAME_FIRST = $request->input('ATH_NAME_FIRST');
            $modelInstance->ATH_NAME_FULL = $request->input('ATH_NAME_FULL');
            $modelInstance->ath_name_informal = $request->input('ath_name_informal');
            $modelInstance->ath_name_club = $request->input('ath_name_informal');
            $modelInstance->ath_email = $request->input('ath_email');
            $modelInstance->ath_phone = $request->input('ath_email');

            $modelInstance->ath_member_status = $request->input('ath_member_status');
            $modelInstance->ath_member_status_option = $request->input('ath_member_status_option');

            $modelInstance->loc_latitude = $request->input('loc_latitude');
            $modelInstance->loc_longitude = $request->input('loc_longitude');
            $modelInstance->loc_api_latlng = $request->input('loc_api_latlng');
            $modelInstance->loc_street_addr_line_1 = $request->input('loc_street_addr_line_1');
            $modelInstance->loc_street_addr_line_2 = $request->input('loc_street_addr_line_2');
            $modelInstance->loc_postal_box = $request->input('loc_postal_box');
            $modelInstance->loc_apt_suite = $request->input('loc_apt_suite');
            $modelInstance->loc_city = $request->input('loc_city');
            $modelInstance->loc_region_name = $request->input('loc_region_name');
            $modelInstance->loc_region_abbr = $request->input('loc_region_abbr');
            $modelInstance->loc_postal_code = $request->input('loc_postal_code');
            $modelInstance->loc_country_name = $request->input('loc_country_name');
            $modelInstance->loc_country_code = $request->input('loc_country_code');

            $modelInstance->cmp_gender = $request->input('cmp_gender');
            $modelInstance->cmp_dob = $request->input('cmp_dob');
            $modelInstance->cmp_age_current = $request->input('cmp_age_current');
            $modelInstance->cmp_age_end_of_year = $request->input('cmp_age_end_of_year');
            $modelInstance->cmp_age_division_team = $request->input('cmp_age_division_team');
            $modelInstance->cmp_age_division_individual = $request->input('cmp_age_division_individual');
            $modelInstance->cmp_age_division_distance = $request->input('cmp_age_division_distance');
            $modelInstance->cmp_grade = $request->input('cmp_grade');
            $modelInstance->cmp_hs_grad_year = $request->input('cmp_hs_grad_year');
            $modelInstance->cmp_collegiate_grad_year = $request->input('cmp_collegiate_grad_year');
            $modelInstance->cmp_school_id_current = $request->input('cmp_school_id_current');
            $modelInstance->cmp_school_id_next = $request->input('cmp_school_id_next');
            $modelInstance->cmp_next_race_id = $request->input('cmp_next_race_id');

            $modelInstance->flg_school_xc = $request->input('flg_school_xc');
            $modelInstance->flg_school_track = $request->input('flg_school_track');

            $modelInstance->date_of_first_inquiry = $request->input('date_of_first_inquiry');
            $modelInstance->flg_first_practice_scheduled = $request->input('flg_first_practice_scheduled');
            $modelInstance->flg_form_registration = $request->input('flg_form_registration');
            $modelInstance->flg_form_safety = $request->input('flg_form_safety');

            $modelInstance->flg_nationals_candidate = $request->input('flg_nationals_candidate');
            $modelInstance->flg_nationals_accepted = $request->input('flg_nationals_accepted');
            $modelInstance->flg_nationals_confirmed = $request->input('flg_nationals_confirmed');
            $modelInstance->flg_nationals_times_achieved = $request->input('flg_nationals_times_achieved');

            $modelInstance->potential_index = $request->input('potential_index');
            $modelInstance->performance_index = $request->input('performance_index');
            $modelInstance->commitment_index = $request->input('commitment_index');
            $modelInstance->form_index = $request->input('form_index');
            $modelInstance->conditioning_index = $request->input('conditioning_index');
            $modelInstance->mental_skills_index = $request->input('mental_skills_index');
            $modelInstance->toughness_index = $request->input('toughness_index');

            $modelInstance->flg_form_practice_needed = $request->input('flg_form_practice_needed');
            $modelInstance->flg_form_practice_scheduled = $request->input('flg_form_practice_scheduled');

            $modelInstance->nyal_conference_id = $request->input('nyal_conference_id');
            $modelInstance->nyal_region_id = $request->input('nyal_region_id');
            $modelInstance->nyal_league_id = $request->input('nyal_league_id');
            $modelInstance->nyal_division_id = $request->input('nyal_division_id');
            $modelInstance->nyal_club_id = $request->input('nyal_club_id');
            $modelInstance->practice_group_id = $request->input('practice_group_id');


            

            if ($modelInstance->save()) {
                return $modelInstance;
            } else {
                return "ERROR: Record Update FAILED!";
            }
        }
    } //---------------------------------------------------------------------------------------/


}
