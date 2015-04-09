<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 08/04/2015
 * Time: 16:50
 */

class infoCTRLObj {

    private $vue;

    public function __construct() {
        $this->vue = new infoObj();
        $this->vue->display();
    }

}