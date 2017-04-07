<?php


include '../connect.php';

$id= $_POST['id'];

$res = $bdd->prepare("DELETE FROM content WHERE idcontent = :id");
$res->bindValue(':id', $id);
$res->execute();
    
    header('location:read.php');