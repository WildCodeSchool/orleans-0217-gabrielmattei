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
                echo "Image définitivement enregistrée";
                $image = '' . $_FILES['image']['name'];
                $query = "UPDATE about SET image = :image WHERE id=1";
                $prepa = $this->db->pdo->prepare($query);
                $prepa->bindValue(':image', $image);
                $prepa->execute();
            }

        }

    /*    $cvfrancais = null;

        if (isset($_FILES['image'])) {

            $updir = 'assets/upload/';
            $upfil = $updir . basename($_FILES['cvfrancais']['name']);

            $resultat = move_uploaded_file($_FILES['cvfrancais']['tmp_name'], $upfil);

            if ($resultat) {
                echo "Image définitivement enregistrée";
                $cvfrancais = '' . $_FILES['cvfrancais']['name'];
                $query = "UPDATE about SET cvfrancais = :cvfrancais WHERE id=1";
                $prepa = $this->db->pdo->prepare($query);
                $prepa->bindValue(':cvf', $cvfrancais);
                $prepa->execute();
            }

        }*/


        $query = ("UPDATE about SET bio = :bio , subbio= :subbio , contact1= :contact1 , contact2= :contact2, cvanglais= :cvanglais,
        cvfrancais= :cvfrancais , cvchinois= :cvchinois , mail1= :mail1 , mail2= :mail2 , tel1= :tel1 , tel2= :tel2 WHERE id= 1 ");
        $prepa = $this->db->pdo->prepare($query);
        $prepa->bindValue(':bio', $_POST['bio']);
        $prepa->bindValue(':subbio', $_POST['subbio']);
        $prepa->bindValue(':contact1', $_POST['contact1']);
        $prepa->bindValue(':contact2', $_POST['contact2']);
        //$prepa-> bindValue(':image' , $_POST['image']);
        $prepa->bindValue(':cvanglais', $_POST['cvanglais']);
        $prepa->bindValue(':cvfrancais', $_POST['cvfrancais']);
        $prepa->bindValue(':cvchinois', $_POST['cvchinois']);
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