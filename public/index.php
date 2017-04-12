<?php

require_once 'twigloader.php';

include '../config/connect.php';

$page='home';
if(isset($_GET['p'])) {
    $page = $_GET['p'];
}

switch ($page) {

    case'home':
        header("Location : ../src/views/ContentController.php");
        break;
    case'about':
        header("Location : ../src/views/AboutController.php");
        break;
    default:
        header("Location : 404.php");
        break;
}












$query = "SELECT * FROM content ORDER BY year desc";
$res = $pdo->query($query);
$resAll = $res->fetchAll(PDO::FETCH_CLASS);

echo $twig->render('index.html.twig',
    array(
        'contents' => $resAll
    ));


