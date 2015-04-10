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
    private $manPatho;
    private $keyword;

    function __construct()
    {
        $this->keyword = '';
        $this->vue = new resultat();
        $this->manPatho = new pathologieManager();
    }

    public function filtrer()
    {
        $liste = $this->manPatho->getPatho($this->meridien, $this->type,$this->carac);

        //var_dump($liste);
        $this->vue->display($liste);

    }


    public function setMeridien($meridien)
    {
        $this->meridien = $meridien;

    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setCarac($carac)
    {
        $this->carac = $carac;
    }

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

}