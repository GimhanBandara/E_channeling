<?php
// connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "e_medical_centre";

$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>