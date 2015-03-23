<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 23/03/2015
 * Time: 18:43
 */

class pathologie {

    private $idP;
    private $mer;
    private $type;
    private $desc;

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
    public function getIdP()
    {
        return $this->idP;
    }

    /**
     * @return mixed
     */
    public function getMer()
    {
        return $this->mer;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }



}