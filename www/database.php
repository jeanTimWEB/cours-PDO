<?php

class Database{

    //attributs
        private $_connect;
   
    //constructeur
    public function __constuct()
        {
            //le chemein vers le serveur
            $PARAM_hote='mariadb';
            // le port de connection a al base de donnée
            $PARAM_port='3306';
            // le nom de ma base de donnée
            $PARAM_nom_bd='AnnuaireToutou';
            // le nom de user pour se connecter
            $PARAM_utilisateur='adminToutou';
            //mot de passse du user pour se connecter
            $PARAM_mot_passe='Annu@ireT0ut0u';
        }
                //methodes
    public function login()
    {
        $this->_connect = $connexion;
    }

}
        try
        {
            $connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe
                );
        }
        catch(Exception $e)
        {
            echo 'Erreur: '. $e->getMessage().'<br />';
            echo 'N°: '.$e->getCode();
        }




?>