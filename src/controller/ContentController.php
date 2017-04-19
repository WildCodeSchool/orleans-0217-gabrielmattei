<?php


namespace wcs\controller;

use wcs\model\ContentManager;

class ContentController extends Controller
{
    public function affiche()
    {

        $contentManager = new ContentManager();
        $contents = $contentManager->findALL();

        return $this->getTwig()->render('index.html.twig', array('contents' => $contents));
    }


  /*  public function deleteContent()
    {

        if(isset($_POST['delete'])) {

            $content = new ContentManager();
            $content->deleteAction($_POST['id']);
        }
        return $this->getTwig()->render('index.html.twig');
    }*/

}