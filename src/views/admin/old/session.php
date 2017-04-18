<?php

session_start(); // Activation de la session

define("DSN", "mysql:host=localhost;dbname=gabrielDB");
define("USER", "root");
define("PASS", "Wld");

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try {

    $pdo = new PDO(DSN, USER, PASS, $options);
}

catch(Exception $e){
    die('Connexion à la base de données impossible !');
}


$login = isset($_POST['login']) ? $_POST['login'] : null;
$password = isset($_POST['password']) ? sha1($_POST['password']) : null;


$sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
$req= $pdo->query($sql);
$result = $req->fetchAll(PDO::FETCH_OBJ);

if(!empty($result)){
    $_SESSION['logged'] = true;
    $_SESSION['login'] = $login;

    header('Location: index.php');
}

else{

    header('Location: login.php?error=1');

}
exit();

