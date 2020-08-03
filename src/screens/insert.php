
<?php
include_once 'connect.php';
session_start();
include_once 'course-list.php';


if(isset($_POST['hourSubmit'])){
$Total_Hours = $_POST['tHours'];					
if($_SESSION['position']=="TA")
{
  $Inclass_Duties = $_POST['inclassDuties'];
  $Office_Duties = $_POST['officeDuties'];
  $Marking_Hours = $_POST['markingHours'];
  $Other_Hours = $_POST['otherHours'];
}
else
{
  $Inclass_Duties = 0;
  $Office_Duties = 0;
  $Marking_Hours = 0;
  $Other_Hours = 0;
}
}

$eName = $courses[$_SESSION['course']]['eName'];
$CurrStudent = $courses[$_SESSION['course']]['CurrStudent'];
$Id = $courses[$_SESSION['course']]['Id'];
$CourseID = $courses[$_SESSION['course']]['CourseID'];
$Term = $courses[$_SESSION['course']]['Term'];
$Year = $courses[$_SESSION['course']]['year'];
$iName = $courses[$_SESSION['course']]['iName'];
$CRN = $courses[$_SESSION['course']]['CRN'];
$position  = $_SESSION['position'];

$sql = "INSERT INTO form (E_name, Curr_Dal_stu, DalId, IName, CourseID, CRN, Term, Year, Total_hour, IClass_hours, Office_hours, Grading_hours, Other_hours, Position) VALUES ('$eName', '$CurrStudent','$Id','$iName','$CourseID', $CRN, '$Term', $Year, $Total_Hours,$Inclass_Duties, $Office_Duties, $Marking_Hours,$Other_Hours, '$position')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  header("Location: TA.php");
?>
