<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 13:55
 */

namespace wcs\controller;


class Controller
{
    private $twig;

    public function __construct()
    {


        $loader = new \Twig_Loader_Filesystem(array('../src/views','../src/views/admin'));
        $this->twig = new \Twig_Environment($loader, array(
            'cache' => false,
            'debug' => true,
        ));

        $this->twig->addExtension(new \Twig_Extension_Debug());
    }

    /**
     * @return Twig_Environment
     */
    public function getTwig(): \Twig_Environment
    {
        return $this->twig;
    }

}