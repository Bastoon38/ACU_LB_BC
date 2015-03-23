<?php
include('connexion_sql.php');
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 12/03/2015
 * Time: 14:30
 */

class meridienManager {
    private $_bdd;

    public function __construct()
    {
        $this->_bdd = new connexion_sql();
        $this->arrayMeridien = array();
    }

    public function getAll()
    {

        $query = $this->_bdd->prepare('SELECT * FROM meridien');
        $query->execute();

        // On récupère chaque entrée une à une
        while ($donnees = $query->fetch()) {
            array_push($this->arrayMeridien, new meridien($donnees));
        }

        return $this->arrayMeridien;
    }
}