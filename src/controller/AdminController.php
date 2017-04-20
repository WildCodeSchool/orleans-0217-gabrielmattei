<?php


namespace wcs\controller;

use wcs\model\ContentManager;


class AdminController extends Controller
{
    public function afficheAdmin()
    {
        $contentManager = new ContentManager();

        if(isset($_POST['delete'])) {
            $contentManager->deleteAction($_POST['id']);
        }

        $resultats= $contentManager->findALL();
        return $this->getTwig()->render('admin/indexAdmin.html.twig', array('resultats' => $resultats));

    }

    public function afficheOneAdmin($id)
    {
        $contentManager = new ContentManager();

        if (isset($_POST['update'])){
            $contentManager->update();
            header('location:index.php?p=admin');
        }

        $resultat= $contentManager->findOne($id);

        return $this->getTwig()->render('admin/updateAdmin.html.twig', array('resultat' => $resultat));

    }

    public function addContent()
    {
        $contentManager = new ContentManager();

        if(isset($_POST['insert'])) {
            $contentManager->addContent();
            header('location:index.php?p=admin');
        }

        return $this->getTwig()->render('admin/createAdmin.html.twig');
    }

    public function showProfil()
    {
        $contentManager = new ContentManager();

        if(isset($_POST['profil'])){
            $contentManager->showprofil();
            header('location:index.php/?p=admin');
        }
        return $this->getTwig()->render('admin/profilAdmin.html.twig');
    }


    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: index.php?p=login');
    }


    public function login()
    {
        if(isset($_POST['login']) and isset($_POST['password']))
        {
            $cont = new ContentManager();
            $isAuth = $cont->loginAction($_POST['login'], $_POST['password']);
            if($isAuth)  {
                header('Location: index.php?p=admin');
            }
        }
        return $this->getTwig()->render('loginAdmin.html.twig');
    }

    public function afficheError($error)
    {
        switch ($error)
        {
            case 'notlogged':
                $rep = '<div class="alert alert-danger">Erreur d\'authentification, veuillez vous connecter </div >';
                return $this->getTwig()->render('index.html.twig', array('reperror' => $rep));
            break;

            case '404';
                return $this->getTwig()->render('404.html.twig');
            break;
        }
    }

}