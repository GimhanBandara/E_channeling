<?php
require_once "../connection_database/connection.php";

$comment = $_POST['comment'];
$current_date = date("Y/m/d");

$sql = "INSERT INTO comment_table (comment, 
                                   enter_date) 
                                   VALUES 
                                   ('$comment',
                                   '$current_date')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql . "<br>". $conn->error;
}

//close mySQL connection
$conn->close();
?>