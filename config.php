<?php
$dbn = "mysql:host=localhost;dbname=webtaichinh";
$dbusername = "root";
$dbpwd = "";

try {
    $pdo = new PDO($dbn, $dbusername, $dbpwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connect failed" . $e->getMessage();
}
