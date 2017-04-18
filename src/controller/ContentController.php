<?php


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


}