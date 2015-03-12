<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 12/03/2015
 * Time: 14:28
 */

class meridien {

    private $code;
    private $nom;
    private $element;
    private $yin;

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

    public function getCode()
    {
        return $this->code;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function getYin()
    {
        return $this->yin;
    }


}