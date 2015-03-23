<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 26/02/2015
 * Time: 11:35
 */
include_once('lib/model/manager/meridienManager.php');
include_once('lib/model/manager/pathologieManager.php');
include_once('lib/model/entities/meridien.php');
include_once('lib/model/entities/pathologie.php');

$manMeridien = new meridienManager();
$liste = $manMeridien->getAll();
$manPatho = new pathologieManager();
$listePatho = $manPatho->getAllType();

foreach($listePatho as $type) {
   echo $type->getType();
}

foreach($liste as $meridien) {

    var_dump($meridien);
    echo $meridien->getNom();

}
    //include_once('lib/vue/patho.php');
?>