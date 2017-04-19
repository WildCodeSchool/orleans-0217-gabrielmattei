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
$isAdmin = false;
if (isset($_SESSION['logged']))
{
    $isAdmin = true;
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
        if($isAdmin)
        {
            $view = $pagecont->afficheAdmin();
        }
        header('Location : index.php/?err=NotLogged');
        break;

    case'update':
        $pageupdate= new AdminController();
        if($isAdmin)
        {
            $view = $pageupdate->afficheOneAdmin($_GET['id']);
        }
        header('Location : index.php/?err=NotLogged');
        break;

    case 'create':
        $pageinsert=new AdminController();
        if($isAdmin)
        {
            $view = $pageinsert->addContent();
        }
        header('Location : index.php/?err=NotLogged');
        break;

    case 'profil':
        $pageprofil=new AdminController();
        if($isAdmin)
        {
            $view = $pageprofil->showProfil();
        }
        $view = $pageprofil->showProfil();
        header('Location : index.php/?err=NotLogged');
        break;

    case 'logout':
        $pagelogout=new AdminController();
        if($isAdmin)
        {
            $view = $pagelogout->logout();
        }
        $view = $pagelogout->logout();
        header('Location : index.php/?err=NotLogged');
        break;

    case 'login':
        $pagelogin=new AdminController();
        $view = $pagelogin->login();
        break;

    default:
        header("Location : 404.php");
        break;
}

echo $view;















