<?php
namespace wcs\Twig;

/**
 * Created by PhpStorm.
 * User: necro
 * Date: 19/04/17
 * Time: 18:01
 */
class Environnement extends \Twig_Environment
{
    private $isAuthenticated = false;

    public function __construct(\Twig_LoaderInterface $loader, $options = array())
    {
        parent::__construct($loader, $options);
        $this->isAuthenticated = $options['admin'];
    }

    public function render($name, array $context = array())
    {
        $strAdmin = strstr($name, '/', true);

        if (false === $this->isAuthenticated && 'admin' == $strAdmin) {
            header('Location: index.php?p=login');
        }
        return $this->loadTemplate($name)->render($context);
    }
}
