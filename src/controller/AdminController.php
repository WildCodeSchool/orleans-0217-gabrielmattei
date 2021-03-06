<?php


namespace wcs\controller;

use wcs\model\AboutManager;
use wcs\model\ContentManager;
use wcs\model\Media;


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
            header('location:index.php?p=update&id='.$id);

            $mediaManager = new MediaManager();
            $mediaManager->upload($id);
        }
        elseif (isset($_POST['delete'])){
            $contentManager->deleteMediaAction($_POST['id']);
            header('location:index.php?p=update&id='.$id);
        }

        $resultat= $contentManager->findOne($id);
        $resMedias= $contentManager->findAllFromContent($id);

        return $this->getTwig()->render('admin/updateAdmin.html.twig', array('resultat' => $resultat, 'resMedias' => $resMedias));

    }

    public function addContent()
    {
        $contentManager = new ContentManager();

        if(isset($_POST['insert'])) {
            $mediaManager = new MediaManager();
            $id = $contentManager->addContent();
            $mediaManager->upload($id);
            header('location:index.php?p=admin');
        }

        return $this->getTwig()->render('admin/createAdmin.html.twig');
    }

    public function showProfil()
    {
        $contentManager = new AboutManager();
        $profil=$contentManager->findProfil();

        return $this->getTwig()->render('admin/profilAdmin.html.twig', array('profil'=>$profil));
    }


    public function updateProfil()
    {
        $contentManager = new AboutManager();
        if (isset($_POST['updateProfil'])){
            $contentManager->updateProfil();
            //header('location:index.php?p=admin'); //Pas indispensable
        }
        $profil= $contentManager->findProfil();
        return $this->getTwig()->render('admin/profilAdmin.html.twig', array('profil'=>$profil));

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