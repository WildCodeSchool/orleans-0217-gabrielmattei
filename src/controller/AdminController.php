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
}