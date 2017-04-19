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


    public function updateProfil()
    {
        $bio = $_POST['bio'];
        $subbio = $_POST['subbio'];
        $contact1 = $_POST['contact1'];
        $contact2 = $_POST['contact2'];
        $image = $_POST['image'];
        $cvanglais = $_POST['cvanglais'];
        $cvfrancais = $_POST['cvfrancais'];
        $cvchinois = $_POST['cvchinois'];
        $mail1 = $_POST['mail1'];
        $mail2 = $_POST['mail2'];
        $tel1 = $_POST['mail1'];
        $tel2 = $_POST['mail2'];
        $query = ("UPDATE about SET bio = '$bio' , subbio= '$subbio' , contact1= '$contact1' , contact2= '$contact2' , image= '$image' , cvanglais= '$cvanglais',
        cvfrancais= '$cvfrancais' , cvchinois= '$cvchinois' , mail1= '$mail1' , mail2= '$mail2' , tel1= '$tel1' , tel2= '$tel2' WHERE id= 1 ");
        $this->db->pdo->exec($query);
    }




    public function findProfil()
    {
        $query = "SELECT * FROM about";
        $res = $this->db->pdo->query($query);
        $contents = $res->fetchAll();
        return $contents=$contents[0];
    }
}