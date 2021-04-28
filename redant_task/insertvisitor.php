<!DOCTYPE html>
<html>
<head>
  
  <script src ="js/sweetalert.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
</head>  
<body>

<?php
session_start();

$name = $_POST['name'];
$entry_time = $_POST['entry_time'];
$whom_to = $_POST['whom_to'];
$reason = $_POST['reason'];


$conn = new mysqli('localhost', 'root', '','task');
mysqli_select_db($conn,"task");
$slquery="INSERT INTO visitor(name,entry_time,reason,whom_to_meet) VALUES('$name','$entry_time','$reason','$whom_to')";
mysqli_query($conn,$slquery);
$sql1="UPDATE max SET temp_count=temp_count+1, temp_entry_time='$entry_time' WHERE 1";
mysqli_query($conn,$sql1);
$sql="UPDATE officers SET no_of_people=no_of_people+1 WHERE off_name='$whom_to'";
mysqli_query($conn,$sql); 

header("location:http://localhost:8080/redant_task/index.html");

?>

</body>
</html>