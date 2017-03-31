<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 29/03/17
 * Time: 15:42
 */
require_once 'twigloader.php';

//include 'connect.php';

define("DSN", "mysql:host=localhost;dbname=gabrielDB");
define("USER", "root");
define("PASS", "root");

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try {

    $pdo = new PDO(DSN, USER, PASS, $options);
}
catch(Exception $e){
    die('Connexion à la base de données impossible !');
}


$query = "SELECT * FROM content ORDER BY year desc";
$res = $pdo->query($query);
$resAll = $res->fetchAll(PDO::FETCH_CLASS);

echo $twig->render('index.html.twig',
    array(
        'contents' => $resAll
    ));
