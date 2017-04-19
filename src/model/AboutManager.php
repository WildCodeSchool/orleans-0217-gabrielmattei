<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 16:07
 */

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
        $contents = $res->fetchAll(\PDO::FETCH_CLASS, 'wcs\model\About');

        return $contents;

    }
}