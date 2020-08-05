<?php
include_once 'connect.php';
//get the status and corresponding id from pHourAprv.php
$id = $_GET['id'];
$status = $_GET['status'];

$sql = "INSERT INTO status (id, status) VALUES ($id,'$status')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }    
header("Location: pHourAprv.php");
?>
