<?php

/*
 * [CMD OR SQL] CREATE TABLE tName (id int(1)); // Table Must Have At Least 1 Column.
 *
 * [CMD OR SQL] DESCRIBE tName; // To See Structure Inside Table.
 *
 * [CMD OR SQL] SHOW COLUMNS FROM tName; // To See Structure Inside Table.
 *
 * [CMD OR SQL] SHOW FIELDS FROM tName; // To See Structure Inside Table.
 *
 * [CMD OR SQL] SHOW TABLE STATUS; // Show All Tables And Info What Them, Like Engine, Version, Row Format, etc.
 *
 * [CMD OR SQL] SHOW CREATE TABLE tName; // To See How Is Table Created.
 *
 * [CMD OR SQL] CREATE TABLE IF NOT EXISTS tName; // To Create Table If Not Exist.
 *
 * [CMD OR SQL] DROP TABLE IF EXISTS tName; // To Delete Table If Exist.
 *
 * [CMD OR SQL] RENAME TABLE oldTName1 TO newTName1, oldTName2 TO newTName2; // To Rename A Table And How To Use Continues Statement.
 * [PHPmyAdmin] Select Table And Click On Operation At Table Options Form Change It From [Rename Table To] Field.
 *
 * [CMD OR SQL] ALTER TABLE tName ENGINE = MYISAM; // To Change Storage Engine.
 * [PHPmyAdmin] Select Table And Lick On Operation At Table Options Form Change From [Storage Engine].
 *
 * ALTER Is Change Columns In Table.
 * [CMD OR SQL] ALTER TABLE students ADD password varchar(255) AFTER NAME; // To Change Table To Add Column After Selected Column [If Not Select After Column It Will Create It At End Of The Table].
 * [CMD OR SQL] ALTER TABLE students ADD password varchar(255) FIRST; // Create New Column At The Beginning
 * [PHPmyAdmin] At Structure Before Indexes You Can Select Number Of Columns To Add After What And Go.
 *
 * [CMD OR SQL] ALTER TABLE tName DROP colName; // To Delete Column At Table.
 * [PHPmyAdmin] At Structure You Can Click Drop At Actions Or Select Many Columns And Click Drop
 *
 * [CMD OR SQL] ALTER TABLE tName CHANGE username username varchar(255) AFTER email; // To Move Column After Another Column We Should Change It With His Type After What We Want.
 *
 * [CMD OR SQL] ALTER TABLE tName CHANGE test newTest char(50); // To Change Column Name And Type
 *
 * [CMD OR SQL] ALTER TABLE tName MODIFY test varchar(255); // To Change Column Type By Modify
 */