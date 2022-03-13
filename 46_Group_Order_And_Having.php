<?php

/*
 * SELECT * FROM `try` ORDER BY name; // To Order By What You Want
 * SELECT * FROM `try` ORDER BY name DESC; // To Reverse Ordering
 *
 * SELECT * FROM `try` ORDER BY name, points; // Ordering By Many Attribute
 *
 * SELECT * FROM `try` GROUP BY name; // To Group Repeated Values In One Row
 * SELECT name, SUM(points) FROM `try` GROUP BY name; // To Sum Values When Grouping Like Donations Or Points
 * SELECT name, SUM(points) FROM `try` GROUP BY name ORDER BY points; // To Ordering After Grouping Add DESC At End To Reverse If You Want
 *
 * SELECT status, COUNT(status) AS How_Much FROM `orders` GROUP BY status ORDER BY How_Much; // To Know Count Of Value And Grouping By Alias Name
 *
 * SELECT status, COUNT(status) AS How_Much FROM `orders` GROUP BY status HAVING How_Much > 1; // Select Rows Having Condition Value
 */