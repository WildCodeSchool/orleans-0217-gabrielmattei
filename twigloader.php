<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 29/03/17
 * Time: 15:44
 */

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

?>
