<?php


namespace wcs\controller;

use wcs\model\ContentManager;


class AdminController extends Controller
{
    public function afficheAdmin()
    {
        $contentManager = new ContentManager();
        $resultats= $contentManager->findALL();

        return $this->getTwig()->render('admin/indexAdmin.html.twig', array('resultats' => $resultats));

    }

    public function afficheOneAdmin($id)
    {
        $contentManager = new ContentManager();
        $resultat= $contentManager->findOne($id);

        if (isset($_POST['update'])){
            $this ->update($_POST);
            return $this->getTwig()->render('admin/indexAdmin.html.twig');

        }

        return $this->getTwig()->render('admin/updateAdmin.html.twig', array('resultat' => $resultat));

    }

}