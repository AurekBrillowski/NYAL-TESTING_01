--------------------------------------------------------
--  DDL for Table NYAL_CONFERENCES
--------------------------------------------------------

  CREATE TABLE "NYAL_CONFERENCES" ("ID" NUMBER, "CONFERENCE_NAME" VARCHAR2(50), "COLUMN1" TIMESTAMP (6), "COLUMN2" TIMESTAMP (6)) ;
REM INSERTING into NYAL_CONFERENCES
SET DEFINE OFF;
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (0,'No Conference Assigned',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (1,'South Central States Conference',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (2,'North Central States Conference',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (3,'Western States Conference',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (4,'Eastern States Conference',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (5,'Really Fake Conferences - ORACLE',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (20,'New Name for Six-Twenty!',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (50,'WITH OLD STYLE TRIGGER',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (40,'TEST 8b HERE.',null,null);
Insert into NYAL_CONFERENCES (ID,CONFERENCE_NAME,COLUMN1,COLUMN2) values (51,'OLD STYLE 2',null,null);
--------------------------------------------------------
--  DDL for Index NYAL_CONFERENCES_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "NYAL_CONFERENCES_PK" ON "NYAL_CONFERENCES" ("ID") ;
--------------------------------------------------------
--  DDL for Trigger NYAL_CONFERENCES_ID_TRG
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "NYAL_CONFERENCES_ID_TRG" 
BEFORE INSERT 
ON NYAL_CONFERENCES
FOR EACH ROW 
BEGIN
  :NEW.ID := NYAL_CONFERENCES_ID_SEQ.NEXTVAL;
END;
/
ALTER TRIGGER "NYAL_CONFERENCES_ID_TRG" ENABLE;
--------------------------------------------------------
--  Constraints for Table NYAL_CONFERENCES
--------------------------------------------------------

  ALTER TABLE "NYAL_CONFERENCES" ADD CONSTRAINT "NYAL_CONFERENCES_PK" PRIMARY KEY ("ID") USING INDEX  ENABLE;
  ALTER TABLE "NYAL_CONFERENCES" MODIFY ("CONFERENCE_NAME" NOT NULL ENABLE);
