<?php 
//la info de la tabla crearla en un objeto
//atributos privados
  class User { 
    private $id;
    private $name;
    private $lastName;
    private $idNumber;
    
    //constructor q pide datos de entrada para crear el objeto
      public function __construct (
        $idP,
        $nameP, 
        $lastNameP, 
        $idNumberP
      ){ 
      $this->id = $idP;
      $this->name = $nameP;
      $this->lastName = $lastNameP;
      $this->idNumber = $idNumberP;
    }

    //funciones get
    public function getId (){
        return $this->id;
     }

    public function getName (){
        return $this->name;
     }

    public function getlastName (){
        return $this->lastName;
     }
    
    public function getidNumber (){
        return $this-> idNumber;
     }
   
  }
  
 




?>