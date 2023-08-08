php
Copy
<?php
class Greeting {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function displayMessage() {
        echo "Hello All, I am {$this->name}!";
    }
}

// Create an instance of Greeting with a specific name
$greeting = new Greeting('Scott');

// Call the displayMessage() method to show the introductory message
$greeting->displayMessage();
?>