<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gabriel Mattei | Conductor | admin</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="../img/favico.png" sizes="32x32" />
    <!-- CSS STYLE LINKS -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>

<div class="container-fluid">
<?php

include '../connect.php';


$res = $bdd->query("SELECT * FROM content");
//$res->bindValue(':table','');
//$res->execute();


while ($resultat = $res->fetch()) {
    ?>

        <div class="row">
            <div class="col-lg-4">
                <?= $resultat['title']; echo $resultat['subtitle'];?>
            </div>
            <div class="col-lg-1">
                <form method="post" action="delete.php">
                    <input type="hidden" name="id" value="<?= $resultat['idcontent'] ?>">
                    <input type="submit" name="delete" value="delete">
                </form>
            </div>
            <div class="col-lg-1">
                <a href="update.php?id=<?= $resultat['idcontent'] ?>">Update</a>

            </div>
        </div>
    <?php
};
?>
</div>
</body>