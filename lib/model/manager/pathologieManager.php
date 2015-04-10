<?php
/**
 * Created by PhpStorm.
 * User: lbl
 * Date: 23/03/2015
 * Time: 18:46
 */

class pathologieManager {

    private $_bdd;

    public function __construct()
    {
        $this->_bdd = new connexion_sql();
        $this->_bdd->exec("set character set UTF8");
        $this->arrayTypePathologie = array();
    }

    /*
    public function getAllType()
    {

        $query = $this->_bdd->prepare('SELECT DISTINCT type FROM patho');
        $query->execute();

        while ($donnees = $query->fetch()) {
            array_push($this->arrayTypePathologie,  new pathologie($donnees));
        }

        return $this->arrayTypePathologie;
    }
*/


    public function getPatho($meridien,$type,$carac,$keyword)
    {
        $query = 'SELECT * FROM v_pathologies WHERE 1';

        if(! empty($meridien))
        {
            $clause ='';

            foreach($meridien as $key=> $value)
            {
                if(strlen($clause)>0)
                {
                    $clause.= sprintf(' OR  meridien like \'%%%s%%\'',$value);
                }
                else
                {
                    $clause.= sprintf('meridien like \'%%%s%%\'',$value);
                }
            }

            $clause = ' AND ( '.$clause.' )';
            $query .= $clause;
        }

        if(!empty($type))
        {
            $clause ='';

            foreach($type as $key=> $value)
            {
                if(strlen($clause)>0)
                {
                    $clause.= sprintf(' OR  description like \'%%%s%%\'',$value);
                }
                else
                {
                    $clause.= sprintf('description like \'%%%s%%\'',$value);
                }
            }

            $clause = ' AND ( '.$clause.' )';
            $query .= $clause;
        }

        if(!empty($carac))
        {
            $clause ='';

            foreach($carac as $key=> $value)
            {
                if(strlen($clause)>0)
                {
                    $clause.= sprintf(' OR  description like \'%%%s%%\'',$value);
                }
                else
                {
                    $clause.= sprintf('description like \'%%%s%%\'',$value);
                }
            }

            $clause = ' AND ( '.$clause.' )';
            $query .= $clause;
        }

        if(strlen($keyword)>0)
        {
            $clause =' AND keyword LIKE \'%'.$keyword.'%\'';
            $query .= $clause;
        }

        $query = $this->_bdd->prepare($query);
        $query->execute();


        while ($donnees = $query->fetch()) {
            array_push($this->arrayTypePathologie,  new pathologie($donnees));
        }

        return $this->arrayTypePathologie;

    }



}