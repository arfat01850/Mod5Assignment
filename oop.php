<?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

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

$person = new Person("Abdur Rahim\n","arfat01850@gmail.com");
echo $person-> getName();
echo $person -> getEmail();




require_once 'index.html';
$person -> submit($_POST['name'], $_POST['email']);
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail();

// // Include the Person class file
// require_once 'Person.php';

// // Create a new instance of Person with the form data
// $person = new Person($_POST['name'], $_POST['email']);

// // Display the person's name and email
// echo "Name: " . $person->getName() . "<br>";
// echo "Email: " . $person->getEmail();
// ?>
