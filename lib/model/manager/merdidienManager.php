<?php
include('connexion_sql.php');
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 12/03/2015
 * Time: 14:30
 */

class merdidienManager {
    private $_bdd;

    public function __construct()
    {
        $this->_bdd = new connexion_sql();
    }

    public function getAll()
    {
        $query = $this->_bdd->prepare('SELECT * FROM meridien');
        $query->execute();
        $result = $query->fetchAll();

        return $result;
    }
}