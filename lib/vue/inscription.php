<?php
echo file_get_contents('/fragments/header.txt', true); //true permet d'indiquer que l'on prend la racine du projet comme origine
?>
<h1>test formulaire</h1>
<form action="#" method="post">
    <ul class="formulaire">
        <li>
            <label for="prenom">Prénom :</label>
            <input type="text  " id="prenom" required/>
        </li>
        <li>
            <label for="nom">Nom :</label>
            <input type="text  " id="nom" required/>
        </li>
        <li>
            <label for="mail">Email :</label>
            <input type="email" id="mail" required/>
        </li>
        <li>
            <input type="submit" value="Valider"/>
        </li>
    </ul>
</form>
<?php
echo file_get_contents('/fragments/footer.txt',true);
?>