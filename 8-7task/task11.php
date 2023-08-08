<?php
class Greeting {
    public function displayMessage($name) {
        echo "Hello All, I am $name!";
    }
}

// Create an instance of Greeting
$greeting = new Greeting();

// Call the displayMessage() method and pass the name argument
$greeting->displayMessage('Scott');
?>