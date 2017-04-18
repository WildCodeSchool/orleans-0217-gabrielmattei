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

//    public function update($_POST)
//    {
//        $title = $_POST['title'];
//        $subtitle = $_POST['subtitle'];
//        $year = $_POST['year'];
//        $id= $_POST['id'];
//        $query=("UPDATE content SET title = '$title' , subtitle= '$subtitle' , year= '$year' WHERE id= $id ");
//        $this->db->pdo->exec($query);
//
//    }

}