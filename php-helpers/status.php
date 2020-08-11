<?php
include_once 'connect.php';
//get the status and corresponding id from pHourAprv.php
$id = $_GET['id'];
$status = $_GET['status'];

$statSql = "SELECT status FROM status WHERE id=$id";
$result = mysqli_query($conn, $statSql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0)
{
  $sql = "UPDATE status SET status='$status' WHERE id=$id";
}
else
{
  $sql = "INSERT INTO status (id, status) VALUES ($id,'$status')";
}

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location: ../pHourAprv.php");
?>
