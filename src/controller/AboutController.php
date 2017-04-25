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
    public function listAbout()
    {
        $aboutManager = new AboutManager();
        $abouts= $aboutManager->findAll();

        return $this->getTwig()->render('about.html.twig', array('about' => $abouts[0]));

    }
}