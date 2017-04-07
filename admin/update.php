<?php

include '../connect.php';

$id = $_GET['id'];


if (isset($_POST['update'])){

    $title= $_POST['title'];
    $subtitle= $_POST['subtitle'];
    $year= $_POST['year'];

    $bdd->exec("UPDATE  content SET title = '$title' , subtitle= '$subtitle' , year= '$year' WHERE idcontent= $id ");

    header('location:read.php');

}

$res= $bdd->query("SELECT * FROM content WHERE idcontent= $id ");

$req= $res->fetch();

?>

<form action="update.php?id=<?= $id ?>" method="post">
    <div>
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" value="<?= $req['title']; ?>"/>
    </div>
    <div>
        <label for="subtitle">Sous-titre :</label>
        <input type="text" id="subtitle" name="subtitle" value="<?= $req['subtitle']; ?>"/>
    </div>
    <div>
        <label for="year">Année :</label>
        <input type="text" id="year" name="year" value="<?= $req['year']; ?>"/>
    </div>
    <div class="button">
        <button type="submit" name="update">Modifier</button>
    </div>

</form>
