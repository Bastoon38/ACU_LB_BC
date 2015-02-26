<?php
    include_once('lib/model/userModel.php');
    include_once('lib/vue/inscription.php');

    $modUser = new userModel();

    $utilisateur = $modUser->getAll();