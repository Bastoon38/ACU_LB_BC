<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 09/04/2015
 * Time: 19:23
 */

class resultat {

    public function display($row)
    {
        $fragment ='';
        if(!empty($row))
        {
            $fragment = '<table id="resultat">
               <caption>Pathologies</caption>
               <thead> <!-- En-tête du tableau -->
                   <tr>
                       <th>Méridien</th>
                       <th>Pathologie</th>
                       <th>Symptome</th>
                   </tr>
               </thead>';
            foreach($row as $patho)
            {
                $fragment .='<tr>'.
                       '<td>'.$patho->getMeridien().'</td>'.
                       '<td>'.$patho->getDescription().'</td>'.
                       '<td>'.$patho->getSymptome().'</td></tr>';
            }
            $fragment .= '</thead>';
        }
        else
        {
            $fragment = 'Aucune donné';
        }

        echo file_get_contents('/fragments/header.txt', true);
        echo $fragment;
        echo file_get_contents('/fragments/footer.txt',true);
    }

}