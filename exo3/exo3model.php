<?php

require_once ("exo3/config/dbconf.php");
global $config;
$pdo = new PDO($config['host'],
    $config['user'],
    $config['password']);

$pdo->query("SET NAMES UTF8");//Encodage UTF8

$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;

$stmt = $pdo->prepare('SELECT * FROM magazines ORDER BY ID');
$stmt->execute();
$result = [];
foreach($stmt as $row){
    $result[] = $row;
}

$stmt1 = $pdo->prepare("SELECT * FROM abonnes_magazines
                          JOIN abonnes AS a
                          ON abonnes_id = a.id
                          JOIN magazines AS m
                          ON abonnes_magazines.magazines_id = m.id
                          WHERE abonnes_magazines.magazines_id = 1");
$stmt1->execute();
$result1 = [];
foreach($stmt1 as $row1){
    $result1[] = $row1;
}

$stmt2 = $pdo->prepare("SELECT * FROM abonnes_magazines
                          JOIN abonnes AS a
                          ON abonnes_id = a.id
                          JOIN magazines AS m
                          ON abonnes_magazines.magazines_id = m.id
                          WHERE abonnes_magazines.magazines_id = 2");
$stmt2->execute();
$result2 = [];
foreach($stmt2 as $row2){
    $result2[] = $row2;
}

$stmt3 = $pdo->prepare("SELECT * FROM abonnes_magazines
                          JOIN abonnes AS a
                          ON abonnes_id = a.id
                          JOIN magazines AS m
                          ON abonnes_magazines.magazines_id = m.id
                          WHERE abonnes_magazines.magazines_id = 3");
$stmt3->execute();
$result3 = [];
foreach($stmt3 as $row3){
    $result3[] = $row3;
}

$stmt4 = $pdo->prepare("SELECT * FROM abonnes_magazines
                          JOIN abonnes AS a
                          ON abonnes_id = a.id
                          JOIN magazines AS m
                          ON abonnes_magazines.magazines_id = m.id
                          WHERE abonnes_magazines.magazines_id = 4");
$stmt4->execute();
$result4 = [];
foreach($stmt4 as $row4){
    $result4[] = $row4;
}

$stmt5 = $pdo->prepare("SELECT * FROM abonnes_magazines
                          JOIN abonnes AS a
                          ON abonnes_id = a.id
                          JOIN magazines AS m
                          ON abonnes_magazines.magazines_id = m.id
                          WHERE abonnes_magazines.magazines_id = 5");
$stmt5->execute();
$result5 = [];
foreach($stmt5 as $row5) {
    $result5[] = $row5;
}
