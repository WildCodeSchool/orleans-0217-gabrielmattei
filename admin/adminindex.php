<!DOCTYPE html>
<html lang="fr">
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
<header>
<div class="panel panel-default" id="panel">
    <div class="panel-body">
       <h1> Bonjour Gabriel </h1>
    </div>
</div>
</header>

<div class="btn-group btn-group-justified" role="group" aria-label="...">
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default" data-target="#carousel-example-generic" data-slide-to="0" class="active">Ajout Projet</button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default" data-target="#carousel-example-generic" data-slide-to="1">Update Projet</button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default" data-target="#carousel-example-generic" data-slide-to="2">Delete Projet</button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-default" data-target="#carousel-example-generic" data-slide-to="3">About</button>
    </div>
</div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">


            <form action="create.php" method="post">
                <input type="text" name="nom">
                <input type="text" name="prenom">
                <input type="text" name="age">
                <input type="hidden" name="id" value="">
                <button type="submit" name="insert" value="go">envoyer</button>

            </form>


        </div>
        <div class="item">
            <img src="../img/1.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="../img/1.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="../img/1.jpg" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
    </div>

    <!-- Controls -->

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>