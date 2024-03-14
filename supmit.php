<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);

    echo "Hello, " . $name . "! Welcome to our web-site.";
}
?>
