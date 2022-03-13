<?php

/*
 * Foreign Key Is Key Used At Another Table Like Relationship
 *
 * CREATE TABLE orders (
 * order_id int NOT NULL,
 * price varchar(255),
 * client_id int NOT NULL,
 * PRIMARY KEY(order_id),
 * FOREIGN KEY(client_id) REFERENCES clients(id) // Foreign Key With His References On Create
 * ) ENGINE = INNODB;
 *
 * ALTER TABLE orders ADD CONSTRAINT ordering FOREIGN KEY(client_id) REFERENCES client(id) ON UPDATE CASCADE ON DELETE CASCADE;
 * To Add Foreign Key On Created Column
 *
 * CASCADE = At Any Update Or Delete For Parent Row Automatically Update Or Delete At Child Column, Following Your Steps
 * SET NULL = At Any Update Or Delete For Parent Row Automatically Set Null At Child Column
 * NO ACTION = At Any Update Or Delete For Parent Row Automatically No Action At Child Column
 * RESTRICT = At Any Update Or Delete For Parent Row Automatically Stop Any Action At Parent Row And Child Column
 *
 * Relationships
 * One To One = One For Parent Called By One Child, Like Information By Your ID, Travel Visa
 * One To Many = One Parent Called By Many Children, Like Client ID Called By Many Tables [ Comments, Orders, Profiles ], One User To Many Orders
 * Many To One = Many Children Called By One Parent, Like Client ID Called By Many Tables [ Comments, Orders, Profiles ], Many Orders By One User
 * Many To Many = Many Parents Called By Many Children And Many Children Called By Many Parents, Like Facebook Groups Many Users Can Join Many Groups
 */