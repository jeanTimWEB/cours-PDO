<?php
class Chien
{
    //attributs
    private $_id;
    private $_nom;
    private $_age;
    private $_race;

    private $_nomMaitre;
    private $_telephone;   
    
    // constructeur par defaut

    // méthodes - comportement
    
    public function __set($name, $value){} //fonction magique ^^
        
    public function getId(){return $this->_id;}
    public function getNom(){return $this->_nom;}
    public function getAge(){return $this->_age;}    
    public function getRace(){return $this->_race;}    
    public function getNomMaitre(){return $this->_nomMaitre;}  
    public function getTelephone(){return $this->_telephone;} 
    
        
    
}



?>