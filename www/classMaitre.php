<?php
class Maitre
{
    //attributs
    private $_id;
    private $_nom;

    
    // constructeur par defaut

    // méthodes - comportement
    
    public function __set($name, $value){} //fonction magique ^^  
        //pour eviter que PHP  creer par defaut les colonnes privée non utilisée dans les méthodes
        
  
    public function getNomMaitre(){return $this->_nom;}  
    public function getId(){return $this->_id;} 
    
        
    
}



?>