<?php

require_once '../connection_database/connection.php';

//retrieve from data
$t_type = $_POST['t_type'];
$date = $_POST['date'];
$time = $_POST['time'];
$full_name = $_POST['full_name'];
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$nic_no = $_POST['NIC_no'];
$reciept = $_POST['reciept'];
$do_id = "2";
$do_ho_id = "1";
$category = "4";
$current_date = date("Y/m/d");

$sql = "INSERT INTO e_channelings (pa_first_name, pa_last_name, pa_full_name, pa_NIC_no, do_id, do_ho_id, do_category_id, channeled_date, time_type, date, time,payment) VALUES ('$f_name','$l_name', '$full_name', '$nic_no', '$do_id' , '$do_ho_id', '$category', '$current_date', '$t_type', '$date', '$time', '$reciept')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql . "<br>". $conn->error;
}

//close mySQL connection
$conn->close();
?>