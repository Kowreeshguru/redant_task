
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
						session_start();
						$conn = new mysqli('localhost', 'root', '','task');
						mysqli_select_db($conn,"task");
						?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="insertvisitor.php">
				<span class="contact100-form-title">
					REPORT
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required" >
					<span class="label-input100">Officer with whom the highest members visited</span>
					<input class="input100" type="text" name="name" value=<?php
						$slquery="SELECT * FROM officers WHERE no_of_people = (SELECT MAX(no_of_people) FROM officers)";
						$res=mysqli_query($conn,$slquery);
						for($i=1;$i<=mysqli_num_rows($res);$i++){
							$row=mysqli_fetch_array($res);
							echo $row['off_name'];
							echo ",";
						}
						?>
					readonly>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Name is required" >
					<span class="label-input100">Highest reason that visitors visited for</span>
					<input class="input100" type="text" name="name" value="<?php
						$slquery="SELECT reason, COUNT(*) FROM visitor GROUP BY reason ORDER BY COUNT(*) DESC LIMIT 1";
						$res=mysqli_query($conn,$slquery);
						for($i=1;$i<=mysqli_num_rows($res);$i++){
							$row=mysqli_fetch_array($res);
							echo $row['reason'];
							echo ",";
						}
						?>"
					readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required" >
					<span class="label-input100">Maximum visitors between the time period of</span>
					<input class="input100" type="text" name="name" value="<?php
						$slquery="SELECT * FROM max";
						$res=mysqli_query($conn,$slquery);
						for($i=1;$i<=mysqli_num_rows($res);$i++){
							$row=mysqli_fetch_array($res);
							echo $row['final_entry_time'];
							echo "-";
							echo $row['final_exit_time'];

							$starttimestamp = strtotime($row['final_entry_time']);
							$endtimestamp = strtotime($row['final_exit_time']);
							$difference = abs($endtimestamp - $starttimestamp)/60;
							echo("-----");
							echo $difference;
							echo(" minutes");
						}
						?>"
					readonly>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required" >
					<span class="label-input100">Maximum no.of.visitors till now</span>
					<input class="input100" type="text" name="name" value="<?php
						$slquery="SELECT * FROM max";
						$res=mysqli_query($conn,$slquery);
						for($i=1;$i<=mysqli_num_rows($res);$i++){
							$row=mysqli_fetch_array($res);
							echo $row['final_count'];
						}
						?>"
					readonly>
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<span></span>
						<a href="http://localhost:8080/redant_task/index.html" class="contact100-form-btn">Back to home page <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></a>
						</span>
					</div>
				</div>

			</form>
		</div>
	</div>


</body>
</html>
