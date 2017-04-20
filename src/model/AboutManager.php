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
}