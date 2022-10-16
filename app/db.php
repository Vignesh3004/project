<?php
/*
 * Database settings
 */
define("DB_SERVER", "127.0.0.1");
define("DB_NAME", "database");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

try {
    $db = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    exit();
}
