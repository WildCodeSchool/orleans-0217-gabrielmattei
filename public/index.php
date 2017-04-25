<?php
session_start();
include '../config/connect.php';
require_once '../vendor/autoload.php';

use \wcs\controller\ContentController;
use \wcs\controller\AboutController;
use \wcs\controller\AdminController;


$page='home';
if(isset($_GET['p'])) {
    $page = $_GET['p'];
}
if (isset($_POST['updateProfil']))
{
    $page = 'updateProfil';
}
switch ($page) {

    case'home':
        $pagecont= new ContentController();
        $view = $pagecont->affiche();
        break;

    case'about':
        $pageabout= new AboutController();
        $view = $pageabout->listAbout();
        break;

    case'admin':
        $pagecont= new AdminController();
        $view = $pagecont->afficheAdmin();
        break;

    case'update':
        $pageupdate= new AdminController();
        $view = $pageupdate->afficheOneAdmin($_GET['id']);
        break;

    case 'create':
        $pageinsert=new AdminController();
        $view = $pageinsert->addContent();
        break;

    case 'updateProfil':
        $pageprofil=new AdminController();
        $view = $pageprofil->updateProfil();
        break;

    case 'profil':
        $pageprofil=new AdminController();
        $view = $pageprofil->showProfil();
        break;

    case 'logout':
        $pagelogout=new AdminController();
        $view = $pagelogout->logout();
        break;

    case 'login':
        $pagelogin=new AdminController();
        $view = $pagelogin->login();
        break;


    default:
        $pageError=new AdminController();
        $view = $pageError->afficheError('404');
        break;
}

echo $view;















