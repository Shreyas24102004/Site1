<?php
$server = "localhost";
$Username = "root";
$password = "";
$database = "garagedb";

try {
    $conn = new mysqli($server, $Username, $password, $database);
} catch (Exception $e) {
    echo "Error connecting to the database: " . $e->getMessage();
}
?>