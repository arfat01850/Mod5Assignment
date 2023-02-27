<?php

class Person{
    public $name, $email;
    public function __construct($name, $email)
    {
        $this -> name = $name;
        $this -> email = $email;

    }
    public function getName(){
        
        return $this->name;
    }
    public function getEmail(){
        return $this-> email;
    }
    public function setName(){
        return $this->name;
    }
    public function setEmail(){
        return $this-> email;
    }
    public function submit(){

    }

}

$person = new Person("Abdur Rahim","arfat01850@gmail.com");

$person = new Person("Rahim","rahim01850@gmail.com");
echo "Name: ". $person-> getName();
echo "Email: ".$person -> getEmail();







  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $name = $_POST['name'];
    $email = $_POST['email'];
  }


