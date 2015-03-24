<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 26/02/2015
 * Time: 11:35
 */
include_once('lib/model/manager/meridienManager.php');
include_once('lib/model/entities/meridien.php');

$manMeridien = new meridienManager();
$liste = $manMeridien->getAll();

//foreach($listePatho as $type) {
   //echo $type->getType();
//}

foreach($liste as $meridien) {

    //var_dump($meridien); // affiche la variable
   // echo $meridien->getNom();

}
    //include_once('lib/vue/patho.php');
    include_once('lib/vue/patho.php');
?>