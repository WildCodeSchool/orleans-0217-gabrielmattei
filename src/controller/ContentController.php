<?php


namespace wcs\controller;

use wcs\model\AboutManager;
use wcs\model\ContentManager;

class ContentController extends Controller
{
    public function affiche()
    {
        $contentManager = new ContentManager();
        $contents = $contentManager->findAll();
        $aboutManager = new AboutManager();
        $abouts= $aboutManager->findAll();

        foreach ($contents as $content) {
            $idContent = $content->getId();
            $contentsMedia[]= [
                'medias' => $contentManager->findAllFromContent($idContent),
                'content' => $content,
            ];
        }
        return $this->getTwig()->render('index.html.twig', array('contentsMedia' => $contentsMedia, 'about'=>$abouts[0]));
    }


}