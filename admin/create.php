<?php
$bdd = new PDO("mysql:host=localhost;dbname=gabrielDB","root","Wld");
//verification de l'existence du post
//var_dump($_POST);

if(isset($_POST['insert'])) {
    $title = $_POST['nom'];
    $subtitle = $_POST['prenom'];
    $year = $_POST['age'];
// initialisation de la requete et execution de la requete
    $bdd->exec("INSERT INTO content(title, subtitle, year) VALUES('$title', '$subtitle', '$year')");

    header('location:adminindex.php');
}
