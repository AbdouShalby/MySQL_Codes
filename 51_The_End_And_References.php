<?php

/*
SELECT
    l.lang_name,
    COUNT(l.lang_id)
FROM
	`users` u
INNER JOIN
	`langs` l
ON
	u.lang_id = l.lang_id // If You Have Identical You Can Use [ USING And Field ]
GROUP BY
	l.lang_id


USING
	(lang_id) // If You Have Identical You Can Use [ USING And Field ]


References
- MariaDB
- MySQL Manual
- MySQL Tutorial
- SQL Fiddle To Test Your Code
 */