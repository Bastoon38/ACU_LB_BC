<?php
    include_once('lib/model/manager/userManager.php');
    include_once('lib/vue/inscription.php');
    $manUser = new userModel();

    $utilisateur = $manUser->getAll();

    if( isset($_POST['prenom']) )// and isset($_POST['nom']) and isset($_POST['mail']) and isset($_POST['pwd'])
    {
       // $manUser->add($_POST['prenom'],$_POST['nom'],$_POST['mail'],$_POST['pwd']);
        echo $_POST['prenom'];
    }
    else
    {
    }
    $manUser->add('test','test','test@test','azerty');
?>