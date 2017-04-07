<?php
define("DSN", "mysql:host=localhost;dbname=gabrielDB");
define("USER", "root");
define("PASS", "Wld");

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

$bdd = new PDO(DSN,USER,PASS, $options);