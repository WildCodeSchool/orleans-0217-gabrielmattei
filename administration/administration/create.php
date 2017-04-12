<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Gabriel Mattei | Espace Administration</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
        <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
-->

        <div class="logo">
            <a href="index.php" class="simple-text">
                Gabriel Mattei
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">

                <li>
                    <a href="index.php">
                        <i class="material-icons">dashboard</i>
                        <p>Vos projets</p>
                    </a>
                </li>
                <li class="active">
                    <a href="create.php">
                        <i class="material-icons">create</i>
                        <p>Ajouter un projet</p>
                    </a>
                </li>
                <li>
                    <a href="profil.php">
                        <i class="material-icons">person</i>
                        <p>Mon profil | About</p>
                    </a>
                </li>
                <li>
                    <a href="../logout.php">
                        <i class="material-icons">power_settings_new</i>
                        <p>Déconnexion</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Ajouter un projet</h4>
                            </div>
                            <div class="card-content">
                                <?php
                                include '../../connect.php';


                                if(isset($_POST['insert'])) {
                                    $title = $_POST['title'];
                                    $subtitle = $_POST['subtitle'];
                                    $year = $_POST['year'];
                                    $category = $_POST['category'];
                                    $description = $_POST['description'];
// initialisation de la requete et execution de la requete
                                    $bdd->exec("INSERT INTO content(title, subtitle, year, description, category) VALUES('$title', '$subtitle', '$year', '$description', '$category')");

                                    header('location:index.php');
                                }
                                ?>

                                <form action="create.php" method="post">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label for="title" class="control-label">Titre du projet :</label>
                                                <input type="text" class="form-control" name="title" id="title" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label"for="subtitle">Sous-titre du projet :</label>
                                                <input type="text" class="form-control" name="subtitle" id="subtitle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label"for="year">Année du projet :</label>
                                                <input type="text" class="form-control" name="year" id="year">
                                            </div>
                                        </div>
                                        <div class="col-md-offset-1 col-md-2">
                                            <div class="form-group label-floating">
                                               <input type="radio" name="category" id="category" value="symphonicMusic" checked />Symphonic Music
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group label-floating">
                                                <input type="radio" name="category" id="category" value="performingArt" />Performing Art
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description du projet :</label>
                                                <div class="form-group label-floating">
                                                    <label class="control-label" for="description"> </label>
                                                    <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button">
                                        <button type="submit" name="insert" class="btn btn-primary pull-right">Ajouter</button>
                                        <div class="clearfix"></div>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>


<script type="text/javascript">
    $(document).ready(function(){

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>
