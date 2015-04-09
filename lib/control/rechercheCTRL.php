<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 19:03
 */

class rechercheCTRL {

    private $vue;

    function __construct()
    {
        $this->vue = new recherche();
        $this->vue->display();
    }

}