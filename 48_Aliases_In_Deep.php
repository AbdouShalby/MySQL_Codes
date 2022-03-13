<?php

/*
SELECT
	u.user_id UserID,
    u.user_name Username,
    l.lang_name Fav_Lang
FROM
	`users` u, `langs` l // Alias Name For Each Table To Use Them As A Shortcut
WHERE
	u.lang_id = l.lang_id
 */