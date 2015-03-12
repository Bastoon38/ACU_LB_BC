<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 12/03/2015
 * Time: 14:10
 */

class user {
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $pwd;

    // Constructeur
    public function __construct($args = null) {
        if(!empty($args)) {
            foreach($args as $key => $value) {
                if(property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getPwd()
    {
        return $this->pwd;
    }
}