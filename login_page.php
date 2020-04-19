<?php
require('connectivity.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		* {
			margin: 0px;
			padding: 0px;
		}
		body{
			font-size: 120%;
			background: #F8F8FF;
		}
		.header{
			width: 30%;
			margin: 50px auto 0px;
			color: white;
			background: #5F9EA0;
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		form{
			width: 30%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: white;
			border-radius: 0px 0px 10px 10px;
		}
		.input-group{
			margin: 10px 0px 10px 0px;
		}
		.input-group label{
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input{
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.btn{
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
		}
	</style>
	<script type="text/javascript">
		function validate(){
			if(document.f1.password.value!=document.f1.psw_repeat.value){
				alert("Password does not match!");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<div>
		<?php 
		$username = "";
		$email = "";
		$password = "";

		$db = mysqli_connect('localhost','root','','biren');

		if(isset($_POST['register'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$r_password = $_POST['psw_repeat'];

			$sql = "insert into signup(username,email,password,r_password) values('$username','$email','$password','$r_password')";

			$sql1 = "select * from signup where username ='" .$username. "' and email='".$email."'";
			
			$result = $db->query($sql1);
    		$row = $result->fetch_assoc();

    		if ($username == $row['username'] && $email == $row['email']){
    			echo "<script type='text/javascript'> window.alert('User already exits! '); window.location.href='http://localhost/Yeshwanth_coding_internshala/login_page.php';</script>";
    		}
    		else{
    			mysqli_query($db,$sql);
    			echo "<script type='text/javascript'> window.alert('Signup Successful!'); window.location.href='http://localhost/Yeshwanth_coding_internshala/login_page.php';</script>";
    		}

			

	// echo "<script type='text/javascript'> window.alert('Login Successful'); window.location.href='http://localhost/Yeshwanth_coding_internshala/login_page.php';</script>";
		}
		?>
	</div>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form name="f1" method="post" action="login_page.php" onsubmit="return validate()">
		<div class="input-group">
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter username" name="username" required>
		</div>

		<div class="input-group">
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" pattern="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" required>
		</div>

		<div class="input-group">
			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
			<label style="font-size: 15px;"><i class="fa fa-info-circle" style="color: dodgerblue;"></i>    Passwords must be at least 6 characters.</label>
		</div>

		<div class="input-group">
			<label><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw_repeat" required>
		</div>

		<div class="input-group">
			<button type="submit" id="reg" name="register" class="btn">Register</button>
		</div>

	</form>
	<!-- <script src='jquery-3.5.0.min.js'></script> -->
	<!-- <script src='package/dist/sweetalert2.all.min.js'></script> -->
	<script>
		
	</script>
	
</body>
</html>