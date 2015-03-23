<?php
include_once('lib/model/entities/user.php');
include_once('lib/model/manager/userManager.php');

$manUser = new userModel();


if(isset($_POST['mail']) and isset($_POST['pwd']))
{
    $user = $manUser->getByMail($_POST['mail']);
    $pass = md5($_POST['pwd']);
    if($pass==$user->getPassword())
    {
        $successMessage='Bienvenue '.$user->getPrenom();
    }
    else
    {
        $errorMessage='utilisateur ou mot de passe incorrect';
    }

}
    include_once('lib/vue/connexion.php');
?>