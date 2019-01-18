

-- ###################################################################################################################

--------------------------------------------------------
--  DDL for Table EVENT_ORGANIZATIONS
--------------------------------------------------------
  CREATE TABLE "EVENT_ORGANIZATIONS" ("ID" NUMBER(10,0), "ORGANIZATION_NAME" VARCHAR2(100), "ORGANIZATION_ABBREVIATION" VARCHAR2(10), "ORGANIZATION_WEBSITE" VARCHAR2(150), "CONTACT_NAME" VARCHAR2(45), "CONTACT_PHONE" VARCHAR2(10), "RM_STATE" CHAR(2), "CREATED_AT" DATE, "UPDATED_AT" DATE) ;

--------------------------------------------------------
--  DDL for Index EVENT_ORGANIZATIONS_ID_PK
--------------------------------------------------------
  CREATE UNIQUE INDEX "EVENT_ORGANIZATIONS_ID_PK" ON "EVENT_ORGANIZATIONS" ("ID") ;

--------------------------------------------------------
--  DDL for Trigger EVENT_ORGANIZATIONS_ID_TRG
--------------------------------------------------------
  CREATE OR REPLACE EDITIONABLE TRIGGER "EVENT_ORGANIZATIONS_ID_TRG" 
            before insert on EVENT_ORGANIZATIONS
            for each row
                begin
            if :new.ID is null then
                select EVENT_ORGANIZATIONS_ID_seq.nextval into :new.ID from dual;
            end if;
            end;
/
ALTER TRIGGER "EVENT_ORGANIZATIONS_ID_TRG" ENABLE;

--------------------------------------------------------
--  Constraints for Table EVENT_ORGANIZATIONS
--------------------------------------------------------
  ALTER TABLE "EVENT_ORGANIZATIONS" ADD CONSTRAINT "EVENT_ORGANIZATIONS_ID_PK" PRIMARY KEY ("ID") USING INDEX  ENABLE;
  ALTER TABLE "EVENT_ORGANIZATIONS" MODIFY ("ID" NOT NULL ENABLE);


-- ###################################################################################################################
--------------------------------------------------------
--  DDL for Trigger EVENT_ORGANIZATIONS_ID_TRG
--------------------------------------------------------
  CREATE OR REPLACE EDITIONABLE TRIGGER "EVENT_ORGANIZATIONS_ID_TRG" 
            before insert on EVENT_ORGANIZATIONS
            for each row
                begin
            if :new.ID is null then
                select EVENT_ORGANIZATIONS_ID_seq.nextval into :new.ID from dual;
            end if;
            end;
/
ALTER TRIGGER "EVENT_ORGANIZATIONS_ID_TRG" ENABLE;


-- ###################################################################################################################
--------------------------------------------------------
--  DDL for Sequence EVENT_ORGANIZATIONS_ID_SEQ
--------------------------------------------------------
   CREATE SEQUENCE  "EVENT_ORGANIZATIONS_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE   ;
