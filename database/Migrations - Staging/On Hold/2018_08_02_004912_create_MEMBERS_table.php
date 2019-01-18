<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNyalAthletesTable extends Migration
{
    function displayOnly() {
        $table->string('someString', 50);
        $table->unsignedTinyInteger('smallNum', 50);
    }
    public function up()
    {
        Schema::create('nyal_athletes', function (Blueprint $table) {

            // --------------------------------------------------------------
            // Identification & Security...
            $table->increments('id');
            $table->string('MEMBER_USERNAME', 50)->nullable(true);
            $table->string('MEMBER_PASSWORD', 50)->nullable(true);
            $table->string('MEMBER_NAME_LAST', 50)->nullable(true);
            $table->string('MEMBER_NAME_FIRST', 50)->nullable(true);
            $table->string('MEMBER_NAME_FULL', 100)->nullable(true);
            $table->string('MEMBER_NAME_INFORMAL', 50)->nullable(true);
            $table->string('MEMBER_NAME_IN_CLUB', 50)->nullable(true);
            $table->string('MEMBER_EMAIL', 100)->nullable(true);
            $table->string('MEMBER_PHONE', 30)->nullable(true);

            // ----------------------------------------------------------------- //
            // UNSURE OF DATA TYPE OR OPERATION
            // ----------------------------------------------------------------- //
            $table->string('MEMBER_MEMBER_STATUS', 30)->nullable(true);        // Change to NOT NULL after import!
            $table->string('MEMBER_MEMBER_STATUS_OPTION', 30)->nullable(true); // Change to NOT NULL after import!



            // --------------------------------------------------------------
            // Location...
            $table->string('LOC_LATITUDE', 100)->nullable(true);
            $table->string('LOC_LONGITUDE', 100)->nullable(true);
            $table->string('LOC_API_LATLNG', 100)->nullable(true);
            $table->string('LOC_STREET_ADDR_LINE_1', 100)->nullable(true);
            $table->string('LOC_STREET_ADDR_LINE_2', 100)->nullable(true);
            $table->string('LOC_POSTAL_BOX', 100)->nullable(true);
            $table->string('LOC_APT_SUITE', 100)->nullable(true);
            $table->string('LOC_CITY', 100)->nullable(true); 
            $table->string('LOC_SUB_REGION', 100)->nullable(true);
            $table->string('LOC_REGION_NAME', 100)->nullable(true);
            $table->string('LOC_REGION_ABBR', 100)->nullable(true);
            $table->string('LOC_POSTAL_CODE', 50)->nullable(true);
            $table->string('LOC_COUNTRY_NAME', 100)->nullable(true);
            $table->string('LOC_COUNTRY_CODE', 100)->nullable(true);

            // --------------------------------------------------------------
            // Competition Eligibility...
            $table->char('CMP_GENDER', 1)->nullable(true);
            $table->date('CMP_DOB')->nullable(true);
            $table->char('CMP_YOB', 4)->nullable(true);
            $table->decimal('CMP_AGE_CURRENT', 3, 0)->nullable(true);
            $table->decimal('CMP_AGE_END_OF_YEAR', 3, 0)->nullable(true);
            $table->string('CMP_AGE_DIVISION_TEAM', 15)->nullable(true);
            $table->string('CMP_AGE_DIVISION_INDIVIDUAL', 15)->nullable(true);
            $table->string('CMP_AGE_DIVISION_DISTANCE', 15)->nullable(true);
            $table->decimal('CMP_GRADE', 2, 0)->nullable(true);
            $table->decimal('CMP_HS_GRAD_YEAR', 4, 0)->nullable(true);
            $table->decimal('CMP_COLLEGIATE_GRAD_YEAR', 4, 0)->nullable(true);
            $table->decimal('CMP_SCHOOL_ID_CURRENT', 5, 0)->nullable(true);
            $table->decimal('CMP_SCHOOL_ID_NEXT', 5, 0)->nullable(true);
            $table->decimal('CMP_NEXT_RACE_ID')->nullable(true);    // FK to EVENT_INSTANCES.ID
            // $table->decimal('CMP_NEXT_RACE_ID')->index('IDX_CMP_NEXT_RACE_ID')->nullable(false);
            $table->foreign('CMP_NEXT_RACE_ID')->references('ID')->on('EVENT_INSTANCES');

			$table->char("FLG_SCHOOL_XC", 1)->nullable(true);
            $table->char("FLG_SCHOOL_TRACK", 1)->nullable(true);
            
            // --------------------------------------------------------------
            // Prospective & New Member Processing...
            $table->date("DATE_OF_FIRST_INQUIRY")->nullable();
			$table->char("FLG_FIRST_PRACTICE_SCHEDULED", 1)->nullable();
			$table->char("FLG_FORM_REGISTRATION", 1)->nullable();
			$table->char("FLG_FORM_SAFETY", 1)->nullable();
            

            // --------------------------------------------------------------
            // Nationals Participation...
            $table->char("FLG_NATIONALS_CANDIDATE", 1)->nullable();
			$table->char("FLG_NATIONALS_ACCEPTED", 1)->nullable();
            $table->char("FLG_NATIONALS_CONFIRMED", 1)->nullable();
			$table->char("FLG_NATIONALS_TIMES_ACHIEVED", 1)->nullable();


            // --------------------------------------------------------------
            // Performance Overview...
            $table->decimal('POTENTIAL_INDEX', 2, 0)->nullable(true);
            $table->decimal('PERFORMANCE_INDEX', 2, 0)->nullable(true);
            $table->decimal('COMMITMENT_INDEX', 2, 0)->nullable(true);
            $table->decimal('FORM_INDEX', 2, 0)->nullable(true);
            $table->decimal('CONDITIONING_INDEX', 2, 0)->nullable(true);
            $table->decimal('MENTAL_SKILLS_INDEX', 2, 0)->nullable(true);
            $table->decimal('TOUGHNESS_INDEX', 2, 0)->nullable(true);

			$table->char("FLG_FORM_PRACTICE_NEEDED", 1)->nullable();
			$table->char("FLG_FORM_PRACTICE_SCHEDULED", 1)->nullable();

            // --------------------------------------------------------------
            // League Info...
            $table->decimal('NYAL_CONFERENCE_ID', 5, 0)->nullable(true);
            $table->decimal('NYAL_REGION_ID', 5, 0)->nullable(true);
            $table->decimal('NYAL_LEAGUE_ID', 5, 0)->nullable(true);
            $table->decimal('NYAL_DIVISION_ID', 5, 0)->nullable(true);
            $table->decimal('NYAL_CLUB_ID', 1, 0)->nullable(false);
            $table->decimal('PRACTICE_GROUP_ID', 5, 0)->nullable(true);



            $table->timestamps();


            $table->string('TMP_ATH_USERNAME', 50)->nullable(true);
            $table->string('TMP_ATH_PASSWORD', 50)->nullable(true);
            $table->string('TMP_SCHOOL', 50)->nullable(false);
            $table->string('TMP_CLUB_DIVISION', 50)->nullable(false);
			$table->string("TMP_PRACTICE_GROUP", 50)->nullable();
			$table->string("TMP_NEXT_BIG_MEET", 50)->nullable();
			$table->string("TMP_PARENT_NAME", 50)->nullable();
			$table->string("TMP_DRM_ENTRY", 20)->nullable();
			$table->char("TMP_ACTIVE_2016", 1)->nullable();
            $table->char("TMP_PAID_FALL_2017", 1)->nullable();
            

            $table->date('pr_10k')->nullable(true);
            $table->date('pr_5k')->nullable(true);
            $table->date('pr_4k')->nullable(true);
            $table->date('pr_3k')->nullable(true);
            $table->date('pr_2k')->nullable(true);
            $table->date('pr_1k')->nullable(true);
            $table->date('pr_3200m')->nullable(true);
            $table->date('pr_3000m')->nullable(true);
            $table->date('pr_2400m')->nullable(true);
            $table->date('pr_1600m')->nullable(true);
            $table->date('pr_mile')->nullable(true);
            $table->date('pr_1500m')->nullable(true);
            $table->date('pr_1200m')->nullable(true);
            $table->date('pr_800m')->nullable(true);
            $table->date('pr_400m')->nullable(true);
            $table->date('pr_200m')->nullable(true);
            $table->date('pr_100m')->nullable(true);
            $table->date('pr_50m')->nullable(true);



            // ----------------------------------------------------------------- //
            // VIRTUAL COLUMNS LISTING
            // ----------------------------------------------------------------- //
            // 
            // VIRTUAL:  "NAME_FULL"
            //
            //
            //
            //
            // ----------------------------------------------------------------- //

        });

        // DB::statement(
        //    "ALTER TABLE NYAL_ATHLETES 
        //     ADD CONSTRAINT 'CHK_Gender' 
        //     CHECK (GENDER IN ('M','F'))"
        //     );

        // DB::statement(
        //    "ALTER TABLE NYAL_ATHLETES 
        //     ADD CONSTRAINT 'CHK_Grade' 
        //     CHECK ((GRADE >= 1) AND (GRADE <= 18))"
        //     );

        // DB::statement(
        //    "ALTER TABLE NYAL_ATHLETES 
        //     ADD CONSTRAINT 'CHK_Member_Status' 
        //     CHECK (MEMBER_STATUS IN ('Active','On Leave','Alumni','Prospective','Missing','Quit','Dismissed','Unknown'))" 
        //     );




            // STANDARD BOOLEAN CHECK CONSTRAINTS
        // DB::statement("ALTER TABLE NYAL_ATHLETES ADD CONSTRAINT 'CHK_School_XC' CHECK (FLG_SCHOOL_XC IN (1,0))");
        // DB::statement("ALTER TABLE NYAL_ATHLETES ADD CONSTRAINT 'CHK_School_Track' CHECK (FLG_SCHOOL_TRACK IN (1,0))");
    }

    /* FOREIGN KEYS */
    /* 
    1. NYAL_Club_ID
    2. 

    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nyal_athletes');
    }
}

// ----------------------------------------------------------------- //
// BACKEND PROCESSING: Oracle & PHP
// ----------------------------------------------------------------- //
// 1. PROCEDURE: UPDATE_AGES()  
//      - Runs every night at midnight.
//
//
//
//
// ----------------------------------------------------------------- //


// ----------------------------------------------------------------- //
// FRONTEND PROCESSING: Vue JS / JavaScript
// ----------------------------------------------------------------- //
// 1. 
//      - 
//
//
//
//
// ----------------------------------------------------------------- //
