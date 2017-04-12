<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 16:05
 */

namespace wcs\controller;

use wcs\model\AboutManager;

class AboutController extends Controller
{
    public function affiche()
    {
        $aboutManager = new AboutManager();
        $contents= $aboutManager->findALL();

        return $this->getTwig()->render('about.html.twig', array('contents' => $contents));

    }
}