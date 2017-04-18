<?php

include '../config/connect.php';
require_once '../vendor/autoload.php';

use \wcs\controller\ContentController;
use \wcs\controller\AboutController;
use \wcs\controller\AdminController;


$page='home';
if(isset($_GET['p'])) {
    $page = $_GET['p'];
}

switch ($page) {

    case'home':
        $pagecont= new ContentController();
        $view = $pagecont->affiche();
        break;

    case'about':
        $pageabout= new AboutController();
        $view = $pageabout->affiche();
        break;

    case'admin':
        $pagecont= new AdminController();
        $view = $pagecont->afficheAdmin();
        break;

    case'update':
        $pageupdate= new AdminController();
        $view = $pageupdate->afficheOneAdmin($_GET['id']);
        break;

    default:
        header("Location : 404.php");
        break;
}

echo $view;















