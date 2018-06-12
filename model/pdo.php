<?php
// function connection à la bdd
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cballot;charset=utf8',
            'root',
            'linux');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e) {
    echo "pdo fail";
}

