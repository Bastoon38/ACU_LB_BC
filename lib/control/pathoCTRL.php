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
$inputMeridien ="";


foreach($liste as $meridien) {
    $inputMeridien .= "<input type=\"checkbox\" name=\"meridien[]\" id=\"".$meridien->getNom()."\" value=\"".$meridien->getNom()."\"";

    if(isset($_POST['meridien']))
    {
        foreach($_POST['meridien'] as $case) {
            if($case == $meridien->getNom())
            {
                $inputMeridien .=" checked ";
            }
        }
    }
    $inputMeridien .="/>";
    $inputMeridien .= "<label for=\"".$meridien->getNom()."\">".$meridien->getNom()."</label>";
}

    include_once('lib/vue/patho.php');
?>