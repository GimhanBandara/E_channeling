<?php

require_once "../connection_database/connection.php";

//retrieve from data
$t_type = $_POST['time_type'];
$t_id = $_POST['$time_id'];
$full_name = $_POST['full_name'];
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$nic_no = $_POST['NIC_no'];
//$reciept = $_POST['payment'];
$echanneling_statues = "pending";
$do_id = $_POST['$doctor_id'];
$current_date = date("Y/m/d");
$reciept = $_POST['reciept'];

$sql = "INSERT INTO e_channelngs (patient_firstname,
                                 patient_lastname,
                                 patient_fullname,
                                 email,
                                 patient_NICno,
                                 doctor_id, 
                                 payment, 
                                 time_type, 
                                 time_id,
                                 echanneling_statues,
                                 echanneling_done_date
                                  VALUES 
                                  ('$f_name',
                                  '$l_name', 
                                  '$full_name', 
                                  '$email',
                                  '$nic_no', 
                                  '$do_id' ,  
                                  '$reciept',
                                  '$t_type',
                                  '$t_id',
                                  '$current_date', )";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql . "<br>". $conn->error;
}

//close mySQL connection
$conn->close();
?>