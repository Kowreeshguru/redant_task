
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

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="insertvisitor.php">
				<span class="contact100-form-title">
					VISITOR IN
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required" >
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name" required>
					<span class="focus-input100"></span>
				</div>
				
				<div  class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Entry time</span>
					<input class="input100" type="time" name="entry_time" min="09:30" max="18:00" required>
					<span class="focus-input100"></span>
				</div>
				
				<div  class="wrap-input100 validate-input" data-validate="Confirm password is required">
					<span class="label-input100">Whom to meet</span>
					<select class="input100" name="whom_to" id="cars">
						<?php
						$conn = new mysqli('localhost', 'root', '','task');
						mysqli_select_db($conn,"task");
												$slquery = "SELECT * FROM officers where is_in=0";
												$res = mysqli_query($conn,$slquery);
												for($i=1;$i<=mysqli_num_rows($res);$i++){
													$row=mysqli_fetch_array($res);
													echo '<option value="'. $row['off_name'] .'">'. $row['off_name'] .'</option>';
												}
													
						?>
					</select>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Aadhar No is required">
					<span class="label-input100">Reason to meet</span>
					<input class="input100" type="text" name="reason" placeholder="Enter the reason" required>
					<span class="focus-input100"></span>
				</div>
				

             <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Allow in
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</body>
</html>
