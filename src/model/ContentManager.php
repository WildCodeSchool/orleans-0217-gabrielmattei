<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 14:20
 */

namespace wcs\model;
use wcs\DB;

class ContentManager
{

    private $db;

    public function __construct()
    {
        $this->db = new DB();

    }



    public function addContent()
    {
        $query ="INSERT INTO content(title, subtitle, year, description, category) VALUES(:title, :subtitle, :year, :description, :category)";
        $prep = $this->db->pdo->prepare($query);
        $prep->bindValue(':title', $_POST['title']);
        $prep->bindValue(':subtitle', $_POST['subtitle']);
        $prep->bindValue(':year', $_POST['year']);
        $prep->bindValue(':description', $_POST['description']);
        $prep->bindValue(':category', $_POST['category']);
        $res = $prep->execute();
        return $res;
    }

    public function update()
    {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $year = $_POST['year'];
        $id= $_POST['id'];
        $query=("UPDATE content SET title = '$title' , subtitle= '$subtitle' , year= '$year' WHERE id= $id ");
        $this->db->pdo->exec($query);

    }

    public function deleteAction($id)
    {
        $query = 'DELETE FROM content WHERE id= :id';
        $prep = $this->db->pdo->prepare($query);
        $prep->bindValue(':id', $id, \PDO::PARAM_INT);
        $res = $prep->execute();
        return $res;

    }
    public function findALL()
    {
        $query = "SELECT * FROM content ORDER BY year desc";
        $res = $this->db->pdo->query($query);
        $contents = $res->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\Content');

        return $contents;


    }
    public function findOne($id)
    {
        $query = "SELECT * FROM content WHERE id= $id";
        $res = $this->db->pdo->query($query);
        $content = $res->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\Content');

        return $content[0];

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
        var_dump($query);
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