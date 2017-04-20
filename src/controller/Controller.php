<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 13:55
 */

namespace wcs\controller;


use wcs\Twig\Environnement;

class Controller
{
    private $twig;

    private $isAuthenticated = false;

    /**
     * @return bool
     */
    public function isAuthenticated(): bool
    {
        return $this->isAuthenticated;
    }

    /**
     * @param bool $isAuthenticated
     * @return Controller
     */
    public function setIsAuthenticated(bool $isAuthenticated): Controller
    {
        $this->isAuthenticated = $isAuthenticated;
        return $this;
    }



    public function __construct()
    {
        if (isset($_SESSION['isAuthenticated']) && true === $_SESSION['isAuthenticated']) {
            $this->setIsAuthenticated(true);
        }
        $loader = new \Twig_Loader_Filesystem(array('../src/views','../src/views/admin'));

        $this->twig = new Environnement($loader, array(
            'cache' => false,
            'admin' => $this->isAuthenticated()));
    }

    /**
     * @return Twig_Environment
     */
    public function getTwig(): \Twig_Environment
    {
        return $this->twig;
    }

}