<?php
/**
 * Created by PhpStorm.
 * User: wilder5
 * Date: 12/04/17
 * Time: 11:32
 */

namespace wcs;


class DB
{
    /**
     * @var
     */
    private $db;

    /**
     * DB constructor.
     * @param $db
     */
    public function __construct()
    {
        $options = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf');
        try {

            $this->db = new \PDO(DSN, USER, PASS, $options);
        }
        catch(Exception $e){
            die('Connexion à la base de données impossible !');
        }
    }

}