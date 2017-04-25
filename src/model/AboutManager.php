<?php


namespace wcs\model;

use wcs\DB;

class AboutManager
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();

    }

    public function findALL()
    {
        $query = "SELECT * FROM about";
        $res = $this->db->pdo->query($query);
        $abouts = $res->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\About');

        return $abouts;
    }


    public function updateProfil()
    {
        // Gestion d'upload image profil - Insertion dans la BDD
        $image = null;

        if (isset($_FILES['image'])) {

            $updir = 'assets/upload/';
            $upfil = $updir . basename($_FILES['image']['name']);

            $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $upfil);

            if ($resultat) {
                echo "Votre image de profil est définitivement enregistrée";
                $image = '' . $_FILES['image']['name'];
                $query = "UPDATE about SET image = :image WHERE id=1";
                $prepa = $this->db->pdo->prepare($query);
                $prepa->bindValue(':image', $image);
                $prepa->execute();
            }

        }

        $cvfrancais = null;

        if (isset($_FILES['cvfrancais'])) {

            $updir = 'assets/upload/';
            $upfil = $updir . basename($_FILES['cvfrancais']['name']);

            $resultat = move_uploaded_file($_FILES['cvfrancais']['tmp_name'], $upfil);

            if ($resultat) {
                echo "CV français définitivement enregistrée";
                $cvfrancais = '' . $_FILES['cvfrancais']['name'];
                $query = "UPDATE about SET cvfrancais = :cvfrancais WHERE id=1";
                $prepa = $this->db->pdo->prepare($query);
                $prepa->bindValue(':cvfrancais', $cvfrancais);
                $prepa->execute();
            }

        }


        $cvanglais = null;

        if (isset($_FILES['cvanglais'])) {

            $updir = 'assets/upload/';
            $upfil = $updir . basename($_FILES['cvanglais']['name']);

            $resultat = move_uploaded_file($_FILES['cvanglais']['tmp_name'], $upfil);

            if ($resultat) {
                echo "CV anglais définitivement enregistrée";
                $cvanglais = '' . $_FILES['cvanglais']['name'];
                $query = "UPDATE about SET cvanglais = :cvanglais WHERE id=1";
                $prepa = $this->db->pdo->prepare($query);
                $prepa->bindValue(':cvanglais', $cvanglais);
                $prepa->execute();
            }

        }

        $cvchinois = null;

        if (isset($_FILES['cvchinois'])) {

            $updir = 'assets/upload/';
            $upfil = $updir . basename($_FILES['cvchinois']['name']);

            $resultat = move_uploaded_file($_FILES['cvchinois']['tmp_name'], $upfil);

            if ($resultat) {
                echo "CV Chinois définitivement enregistrée";
                $cvchinois = '' . $_FILES['cvchinois']['name'];
                $query = "UPDATE about SET cvchinois = :cvchinois WHERE id=1";
                $prepa = $this->db->pdo->prepare($query);
                $prepa->bindValue(':cvchinois', $cvchinois);
                $prepa->execute();
            }

        }

        $query = ("UPDATE about SET bio = :bio , subbio= :subbio , contact1= :contact1 , contact2= :contact2, 
        mail1= :mail1 , mail2= :mail2 , tel1= :tel1 , tel2= :tel2 WHERE id= 1 ");
        $prepa = $this->db->pdo->prepare($query);
        $prepa->bindValue(':bio', $_POST['bio']);
        $prepa->bindValue(':subbio', $_POST['subbio']);
        $prepa->bindValue(':contact1', $_POST['contact1']);
        $prepa->bindValue(':contact2', $_POST['contact2']);
        //$prepa-> bindValue(':image' , $_POST['image']);
        //$prepa->bindValue(':cvanglais', $_POST['cvanglais']);
        //$prepa->bindValue(':cvfrancais', $_POST['cvfrancais']);
        //$prepa->bindValue(':cvchinois', $_POST['cvchinois']);
        $prepa->bindValue(':mail1', $_POST['mail1']);
        $prepa->bindValue(':mail2', $_POST['mail2']);
        $prepa->bindValue(':tel1', $_POST['tel1']);
        $prepa->bindValue(':tel2', $_POST['tel2']);
        $prepa->execute();
//        $this->db->pdo->exec($query);

    }


    public function findProfil()
    {
        $query = "SELECT * FROM about";
        $res = $this->db->pdo->query($query);
        $contents = $res->fetchAll();
        return $contents[0];
    }
}