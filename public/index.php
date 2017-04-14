<?php

include '../config/connect.php';
require_once '../vendor/autoload.php';

use \wcs\controller\ContentController;
use \wcs\controller\AboutController;


$page='home';
if(isset($_GET['p'])) {
    $page = $_GET['p'];
}

switch ($page) {

    case'home':
        $pagecont= new ContentController();
        echo $pagecont->affiche();
        break;

    case'about':
        $pageabout= new AboutController();
        echo $pageabout->affiche();
        break;

    case'admin':
        $pagecont= new ContentController();
        echo $pagecont->afficheAdmin();
        break;

    default:
        header("Location : 404.php");
        break;
}
















