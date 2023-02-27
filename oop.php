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






  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the user's name and email from the form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Include the Person class file
    require_once('Person.php');

    // Create a new instance of the Person class
    $person = new Person($name,$email);

    // Set the name and email properties using the setName() and setEmail() methods
    $person->setName($name);
    $person->setEmail($email);

    // Display the name and email properties on the webpage
    echo '<p>Name: ' . $person->getName() . '</p>';
    echo '<p>Email: ' . $person->getEmail() . '</p>';
  }


