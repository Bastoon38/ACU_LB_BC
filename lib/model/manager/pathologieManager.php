<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 23/03/2015
 * Time: 18:46
 */

class pathologieManager {

    private $_bdd;

    public function __construct()
    {
        $this->_bdd = new connexion_sql();
        $this->arrayTypePathologie = array();
    }

    public function getAllType()
    {

        $query = $this->_bdd->prepare('SELECT DISTINCT type FROM patho');
        $query->execute();

        while ($donnees = $query->fetch()) {
            array_push($this->arrayTypePathologie,  new pathologie($donnees));
        }

        return $this->arrayTypePathologie;
    }
}