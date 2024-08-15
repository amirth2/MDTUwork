<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    echo "$name";
	$name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    
    // Display the collected data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
}
?>