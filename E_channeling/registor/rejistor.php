<?php
require_once "../connection_database/connection.php";

//Retrieve form data
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$current_date = date("Y/m/d");

$sql = "INSERT INTO registir_users_information (user_firstname,
                                                 user_lastname, 
                                                 user_email, 
                                                 user_password, 
                                                 date_registor_system) 
                                                 VALUES ('$f_name',
                                                  '$l_name',
                                                  '$email',
                                                  '$password',
                                                  '$current_date')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql . "<br>". $conn->error;
}

//close mySQL connection
$conn->close();
?>