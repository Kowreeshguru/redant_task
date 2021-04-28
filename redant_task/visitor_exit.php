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
$exit_time = $_POST['exit_time'];

$conn = new mysqli('localhost', 'root', '','task');
mysqli_select_db($conn,"task");
$slquery="UPDATE visitor SET exit_time='$exit_time' WHERE name='$name'";
mysqli_query($conn,$slquery);
// $slquery1="UPDATE max SET temp_count=temp_count-1, temp_entry_time=$entry_time";
$slquery1="SELECT * FROM max";
$res=mysqli_query($conn,$slquery1);
for($i=1;$i<=mysqli_num_rows($res);$i++){
	$row=mysqli_fetch_array($res);
	if($row['final_count'] < $row['temp_count']){
		$temp_count=$row['temp_count'];
		$temp_entry_time=$row['temp_entry_time'];

		$sql1="UPDATE max SET final_exit_time='$exit_time',final_entry_time='$temp_entry_time',final_count=$temp_count WHERE 1";
		mysqli_query($conn,$sql1);
		$slquery3="UPDATE max SET temp_count=temp_count-1";
		mysqli_query($conn,$slquery3);
	}
	else{
		$slquery4="UPDATE max SET temp_count=temp_count-1";
		mysqli_query($conn,$slquery4);
	}
}

header("location:http://localhost:8080/redant_task/index.html");

?>

</body>
</html>