<?php

class Person{
  var $name;
  # properties
  public $height;
  private ?int $pinNumber;
  protected $socialInsurance;
  
  public function __construct($person, $pin){
    //using construct
    $this->name = $person;
    $this->pinNumber = $pin;
  }
  #public function setName($name){
    //Setter
   # $this->name = $name;
  #}
  public function getName(){
    #Getter
    $name = $this->name;
    $pin = $this->getPinNum();
    
    $final = $name . ' '.$pin;
    return $final;
  }
  
  private function getPinNum(){
    return $this->pinNumber;
  }
}