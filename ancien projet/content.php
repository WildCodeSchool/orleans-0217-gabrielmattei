<?php

include 'connect.php';

$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM videos";
$res = $pdo->query($query);
$resAll = $res->fetchAll(PDO::FETCH_CLASS);

var_dump($resAll);
foreach ($resAll as $resOne) {
    echo $resOne->getDescription();
}

?>


