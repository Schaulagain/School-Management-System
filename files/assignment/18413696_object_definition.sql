--@D:\Database\18413696_object_definition.sql

--Database II [Week2]

--Ramesh Kunwar [18413696]


--Creating  the object type.
CREATE OR REPLACE TYPE invoice_address_type AS OBJECT(
street VARCHAR2(25),
city VARCHAR2(25),
country VARCHAR2(25));
/
SHOW ERRORS--used to show errors.

-- Creating the Old customer table.

CREATE TABLE customers(
customer_id NUMBER(6),
customer_name VARCHAR2(25),
invoice_address invoice_address_type);

--craeting the object table.

CREATE TABLE bill_addresses OF invoice_address_type;

--Dropping the table customers.
DROP TABLE customers;


--Craeting new Customer table.

CREATE TABLE customers(
customer_id NUMBER(6),
customer_name VARCHAR2(25),
invoice_address REF invoice_address_type SCOPE IS bill_addresses);

--Creating the object type, state_type.
CREATE OR REPLACE TYPE state_type AS OBJECT(
state VARCHAR2(25),
country VARCHAR2(25));
/
SHOW ERRORS
--Object table is created name states.

CREATE TABLE states OF state_type;

--Adding new column state_ref.
ALTER TABLE sites ADD
(state_ref REF state_type SCOPE IS states);


--Databse II
--[Week 3]



DROP TYPE social_media_table_type;
DROP TYPE social_media_varray_type;

--DROP TYPE social_media_type;

DROP TABLE adverts;
DROP TABLE prospective_customers;
PURGE RECYCLEBIN;

--Creating object type named social_media_type.

CREATE OR REPLACE TYPE social_media_type AS OBJECT(
media_name VARCHAR2(25),
contact VARCHAR2(20));
/
SHOW ERRORS

--Creating varray named social_media_varray_type.

CREATE TYPE social_media_varray_type AS 
VARRAY(50) OF social_media_type;
/
SHOW ERRORS

--Creating table named prospective_customers.
CREATE TABLE prospective_customers(
prospective_customer_id NUMBER(6),
company_name VARCHAR2(50),
contact_name VARCHAR2(25),
social_media_available social_media_varray_type);

--Creating object table type named social_media_table_type.
CREATE TYPE social_media_table_type AS TABLE OF social_media_type;
/
SHOW ERRORS


--Creating table named adverts.
CREATE TABLE adverts(
advert_id NUMBER(6),
advert_title VARCHAR2(50),
description VARCHAR2(25),
social_media_used social_media_table_type)
NESTED TABLE social_media_used STORE AS social_media_table;



 
