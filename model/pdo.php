<?php
// function connection à la bdd
try {
    $pdo = new PDO('mysql:host=localhost;dbname=testcballot;charset=utf8',
            'root',
            'linux');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "le pdo marche";
    return $pdo;
} catch (PDOException $e) {
    echo "le pdo marche pas";
}
