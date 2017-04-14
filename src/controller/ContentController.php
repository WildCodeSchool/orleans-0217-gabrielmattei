<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 13:55
 */

namespace wcs\controller;

use wcs\model\ContentManager;

class ContentController extends Controller
{
    public function affiche()
    {
        $contentManager = new ContentManager();
        $contents= $contentManager->findALL();

        return $this->getTwig()->render('index.html.twig', array('contents' => $contents));

    }

    public function afficheAdmin()
    {
        $contentManager = new ContentManager();
        $resultats= $contentManager->findALL();

        return $this->getTwig()->render('admin/indexAdmin.html.twig', array('resultats' => $resultats));

    }
}