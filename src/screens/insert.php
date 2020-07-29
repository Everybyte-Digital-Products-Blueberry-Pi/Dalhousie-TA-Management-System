
<?php
session_start();

$courses=array();
$courses['CSCI 1800']=array(
    "eName" => "John Doe", 
    "CurrStudent" => "Yes", 
    "Id" => "B00123456", 
    "CourseID" => "CSCI 1800",
    "Term" =>"Fall",
    "year"=>"2021", 
    "iName" => "Andrew X",
    "CRN" => "1234" 
);
$courses['CSCI 2100']=array(
    "eName" => "Don Joe", 
    "CurrStudent" => "Yes", 
    "Id" => "B00456123", 
    "CourseID" => "CSCI 2100",
    "Term" =>"Winter",
    "year"=>"2021", 
    "iName" => "David Y",
    "CRN" => "4561" 
);
$courses['CSCI 3000']=array(
    "eName" => "John Noe", 
    "CurrStudent" => "Yes", 
    "Id" => "B00987654", 
    "CourseID" => "CSCI 3000",
    "Term" =>"Summer",
    "year"=>"2022", 
    "iName" => "Andrew Z",
    "CRN" => "4563" 
);


if(isset($_POST['hourSubmit'])){
$Total_Hours = $_POST['tHours'];					// Storing Selected Value In Variable
$Other_TotalHours = $_POST['otherTHours'];
$Inclass_Duties = $_POST['inclassDuties'];
$Office_Duties = $_POST['officeDuties'];
$Marking_Hours = $_POST['markingHours'];
$Other_Hours = $_POST['otherHours'];
}

$eName = $courses[$_SESSION['course']]['eName'];
$CurrStudent = $courses[$_SESSION['course']]['CurrStudent'];
$Id = $courses[$_SESSION['course']]['Id'];
$CourseID = $courses[$_SESSION['course']]['CourseID'];
$Term = $courses[$_SESSION['course']]['Term'];
$Year = $courses[$_SESSION['course']]['year'];
$iName = $courses[$_SESSION['course']]['iName'];
$CRN = $courses[$_SESSION['course']]['CRN'];

echo "Total Hours: ".$Total_Hours . " Course ID: ".$CourseID;
?>