

<?php
include '../connect.php';


if(isset($_POST['insert'])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $year = $_POST['year'];
// initialisation de la requete et execution de la requete
    $bdd->exec("INSERT INTO content(title, subtitle, year) VALUES('$title', '$subtitle', '$year')");

    header('location:read.php');
}
?>

<form action="create.php" method="post">
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" />
    </div>
    <div>
        <label for="subtitle">Sous-titre :</label>
        <input type="text" name="subtitle" id="subtitle" />
    </div>
    <div>
        <label for="year">Année :</label>
        <input type="text" id="year" name="year"/>
    </div>
    <div class="button">
        <button type="submit" name="insert">Ajouter</button>
    </div>

</form>
