<?php

$dsn = "mysql:host=localhost;dbname=test"; // Database Source Name
$user = "root"; // Username
$pass = ""; // Password Of This User
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

try {
    $db = new PDO($dsn, $user, $pass, $options); // Start A New Connection With PDO Class
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = "INSERT INTO items (name) VALUES ('منتج 5')";
    $db->exec($q);
}
catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

for ($i = 1; $i <= 500; $i ++) {
    $stmt = $db->prepare("INSERT INTO `test`.`tbl` (`string`) VALUES ('" . $i . "')");
    $stmt->execute();
}