<?php

/*
 * MySQL Datatype
 * =====================================================================================================================
 * - Numeric
 * -- Tiny      Integer     => Maximum Characters [ 4 ] | 127 Maximum Value In MySQL Tiny Integer Type
 * -- Small     Integer     => Maximum Characters [ 6 ] | 32.767 Maximum Value In MySQL Small Integer Type
 * -- Medium    Integer     => Maximum Characters [ 9 ] | 8.388.607 Maximum Value In MySQL Medium Integer Type
 * -- Integer               => Maximum Characters [ 11 ] | 2.147.483.647 Maximum Value In MySQL Integer Type
 * -- BigInt    Integer     => Maximum Characters [ 20 ] | 9.223.372.036.854.776.000 Maximum Value In MySQL Big Integer Type
 * =====================================================================================================================
 *
 * =====================================================================================================================
 * - Date & Time
 * -- Date                  => YYYY-MM-DD   [ 1000-01-01 Minimum - 9999-12-31 Maximum ]
 * -- Datetime              => YYYY-MM-DD HH:Mi:SS    [ 1000-01-01 00:00:00 Minimum - 9999-12-31 23:59:59 Maximum ]
 * -- Timestamp             => YYYY-MM-DD HH:Mi:SS    [ 1970-01-01 00:00:01 UTC Minimum - 2038-01-09 03:14:07 UTC Maximum, Stored As The Number Of Seconds Since The Epoch 1970-01-01 00:00:00 ]
 * -- Time                  => HH:Mi:SS    [ 838:59:59 ]
 * -- Year                  => YYYY | YY    [ 1970 Minimum - 2069 Maximum ]
 * =====================================================================================================================
 *
 * =====================================================================================================================
 * - String
 * ++ Char                  => Character
 * -- Store Fixed Value Like Serial Number
 * -- Max Character 255
 * -- Faster Than VarChar 50%
 * -- Use Static Memory
 * -- Take A Memory Cost If You Used It Or Not
 *
 * ++ Varchar               => Variable Character
 * -- Store Variable Value Like Comment
 * -- Max Character [ MySQL v 5.0.3 => 255 | v 5.0.3+ => 65.535 ]
 * -- Slower Than Char
 * -- Use Dynamic Memory
 * -- Take A Memory Cost Only For Used
 *
 * ++ Text                     => Store Large String
 * -- Deal & Compared Depend On Charset
 * -- Used To Store Long String Like Comment & Article
 *
 * ++ Blob                     => Binary Large Object
 * -- Has No Charset
 * -- Deal & Compared Depend On Numeric Value Of Bytes
 * -- Used To Store Images & Other Files
 *
 * ++ Enum
 * -- To Get One Value By Select [ Single Chose ]
 *
 * ++ Set
 * -- To Get Many Values By Select [ Multi Chose ]
 * =====================================================================================================================
 */