
--------------------------------------------------------
--  DDL for Table EVENT_ORGANIZATIONS
--------------------------------------------------------
  CREATE TABLE "EVENT_ORGANIZATIONS" ("ID" NUMBER(10,0), "ORGANIZATION_NAME" VARCHAR2(100 CHAR), "ORGANIZATION_ABBREVIATION" VARCHAR2(10 CHAR), "ORGANIZATION_WEBSITE" VARCHAR2(150 CHAR), "CONTACT_NAME" VARCHAR2(45 CHAR), "CONTACT_PHONE" VARCHAR2(10 CHAR), "RM_STATE" CHAR(2 CHAR), "CREATED_AT" TIMESTAMP (6), "UPDATED_AT" TIMESTAMP (6)) ;

--------------------------------------------------------
--  DDL for Index UNQ_EVENT_ORGANIZATIONS_ID
--------------------------------------------------------
  CREATE UNIQUE INDEX "UNQ_EVENT_ORGANIZATIONS_ID" ON "EVENT_ORGANIZATIONS" ("ID") ;

--------------------------------------------------------
--  Constraints for Table EVENT_ORGANIZATIONS
--------------------------------------------------------
  ALTER TABLE "EVENT_ORGANIZATIONS" ADD CONSTRAINT "UNQ_EVENT_ORGANIZATIONS_ID" UNIQUE ("ID") USING INDEX  ENABLE;
  ALTER TABLE "EVENT_ORGANIZATIONS" MODIFY ("ID" NOT NULL ENABLE);
