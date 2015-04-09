<?php
    //Connexion PDO SQL
    include_once('lib/model/manager/connexion_sql.php');

    //Modèles
    include_once('lib/model/manager/userManager.php');
    include_once('lib/model/manager/pathologieManager.php');

    //Vues
    include_once('lib/vue/accueilObj.php');
    include_once('lib/vue/infoObj.php');
    include_once('lib/vue/inscriptionObj.php');
    include_once('lib/vue/recherche.php');
    include_once('lib/vue/resultat.php');

    //Contrôleurs
    include_once('lib/control/accueilCTRLObj.php');
    include_once('lib/control/infoCTRLObj.php');
    include_once('lib/control/inscriptionCTRLObj.php');
    include_once('lib/control/rechercheCTRL.php');
    include_once('lib/control/resultatsCTRL.php');

    //Entités
    include_once('lib/model/entities/user.php');
    include_once('lib/model/entities/pathologie.php');

?>