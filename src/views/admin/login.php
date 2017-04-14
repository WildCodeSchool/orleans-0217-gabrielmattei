<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gabriel Mattei | Espace Administration </title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="../public/assets/img/favico.png" sizes="32x32" />
    <!-- CSS STYLE LINKS -->

    <!-- Bootstrap -->
    <link href="../public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/stylesheet.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="login">
                        <img class="profile-img" src="http://68.media.tumblr.com/69287be6c7794c977ddce79c06901503/tumblr_inline_n5scrxSfJA1rb4scn.jpg"
                             alt="">
                        <form class="form-signin" action="session.php" method="post">
                           <!-- --><?php
/*
                            if($_GET['error']){
                                echo '<div class="alert alert-danger">Erreur d\'authentification, veuillez vous connecter</div>';

                            }
                            */?>
                            <input type="text" name="login" class="form-control" placeholder="Username" required autofocus>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
