<?php
$dbn = "mysql:host=localhost;dbname=webtaichinh";
$dbusername = "root";
$dbpwd = "";

try {
    $conn = new PDO($dbn, $dbusername, $dbpwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connect failed" . $e->getMessage();
}
