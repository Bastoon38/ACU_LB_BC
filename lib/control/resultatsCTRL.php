<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 18:57
 */

class resultatsCTRL {

    private $vue;
    private $meridien;
    private $type;
    private $carac;

    function __construct()
    {
       // $this->vue = new resultatsCTRL();
    }

    public function setMeridien($meridien)
    {
        $this->meridien = join(',',$meridien);
        echo $this->meridien;
    }

    public function setType($type)
    {
        $this->type = join(',',$type);
        echo $this->type;
    }

    public function setCarac($carac)
    {
        $this->carac = join(',',$carac);
        echo $this->carac;
    }

}