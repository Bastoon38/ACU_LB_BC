<?php
include_once('lib/model/manager/userManager.php');

$manUser = new userModel();
$user = $manUser->

if(isset($_POST['mail']) and isset($_POST['pwd']))
{
    $result = $manUser->add($_POST['prenom'],$_POST['nom'],$_POST['mail'],$_POST['pwd']);
    if($result==0)
    {
        $successMessage='Vous ètes maintenant membre du site !';
    }
    elseif($result==23000)
    {
        $errorMessage='email déjà utilisé';
    }
    else
    {
        $errorMessage="Une erreur s'est produite !";
    }
}

include_once('lib/vue/connexion.php');
?>