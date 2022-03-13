<?php

/*
 * Primary Key Values Can't Be Repeated Or Duplicated But It Can't Get Null Value.
 * Primary Key Can Used Only Once In 1 Table.
 *
 * How To Create Primary Key
 *
 * CREATE TABLE teachers (
 *     tid int NOT NULL,
 *     name varchar(255),
 *     PRIMARY KEY(tid)
 * );
 *
 * CREATE TABLE classes (
 * cid int NOT NULL PRIMARY KEY,
 * name varchar(255) UNIQUE
 * );
 *
 * ALTER TABLE students ADD PRIMARY KEY(id); // To Add Primary Key For Exist Column.
 *
 * We Can Tell Terminal Primary Key In One Line Or At End.
 *
 * ALTER TABLE students DROP PRIMARY KEY; // To Remove Primary Key At The Table Because It's Have Only One Primary Key.
 */