
--------------------------------------------------------
--  DDL for Table NYAL_CONFERENCES
--------------------------------------------------------
CREATE TABLE "NYAL_CONFERENCES" (
    "ID" NUMBER, 
    "CONFERENCE_NAME" VARCHAR2(50), 
    "COLUMN1" TIMESTAMP (6), 
    "COLUMN2" TIMESTAMP (6)) ;

--------------------------------------------------------
--  DDL for Index NYAL_CONFERENCES_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "NYAL_CONFERENCES_PK" 
ON "NYAL_CONFERENCES" ("ID") ;

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
ALTER TABLE "NYAL_CONFERENCES" 
    ADD CONSTRAINT "NYAL_CONFERENCES_PK" 
    PRIMARY KEY ("ID") 
    USING INDEX  ENABLE;

ALTER TABLE "NYAL_CONFERENCES" 
    MODIFY ("CONFERENCE_NAME" NOT NULL ENABLE);
