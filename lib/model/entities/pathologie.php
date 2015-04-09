<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 23/03/2015
 * Time: 18:43
 */

class pathologie {

    private $meridien;
    private $symptome;
    private $description;

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

    /**
     * @return mixed
     */
    public function getMeridien()
    {
        return $this->meridien;
    }

    /**
     * @return mixed
     */
    public function getSymptome()
    {
        return $this->symptome;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

}