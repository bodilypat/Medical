<?php
	session_start();
	//error_reporting(0);
	include("include/config.php");
	// Code for updating Password
	if(isset($_POST['change']))
	{
		$userName=$_SESSION['name'];
		$userEmail=$_SESSION['email'];
		$newPass=md5($_POST['password']);
		$qUser=mysqli_query($deal,"UPDATE users SET password='$newPass' WHERE fullName='$userName' AND email='$userEmail'");
		if ($query) {
			echo "<script>alert('Password successfully updated.');</script>";
			echo "<script>window.location.href ='userLogin.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Reset</title>
		<!-- CSS -->
		<link rel="stylesheet" href="assign/css/styles.css">
		<link rel="stylesheet" href="assign/css/plugins.css">
		<link rel="stylesheet" href="assign/css/themes/theme-1.css" id="skin_color" />

		<script type="text/javascript">
			function valid()
			{
				if(document.passwordreset.password.value!= document.passwordreset.confirmpassword.value)
				{
					alert("Password and Confirm Password Field do not match  !!");
					document.passwordreset.confirmpassword.focus();
					return false;
				}
				return true;
			}
		</script>
	</head>
<body class="login">
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="logo margin-top-30"><a href="../index.php"><h2> MMS | Patient Reset Password</h2></a></div>
				<div class="box-login">
					<form name="passwordreset" class="form-login"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>Patient Reset Password</legend>
							<p>Please set your new password.<br />
								<span style="color:red;">
								      <?php echo $_SESSION['errmsg']; ?>
									  <?php echo $_SESSION['errmsg']="";?>
								</span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									  <input id="password" name="password" type="password" class="form-control"  placeholder="Password" required>
											<i class="fa fa-lock"></i> 
								</span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input id="confirmpassword" name="confirmpassword" type="password" class="form-control"   placeholder="Password Again" required>
											<i class="fa fa-lock"></i> 
								</span>
							</div>
							<div class="form-actions">
								<button name="change" type="submit" class="btn btn-primary pull-right" >
									  Change <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>							
							<div class="new-account">Already have an account? 
								<a href="userLogin.php">Log-in</a>
							</div>
						</fieldset>
					</form>
					<div class="">
						&copy; <span class="text-bold text-uppercase">Menage Management System</span>
					</div>			
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/login.js"></script>
	<script>
		jQuery(document).ready(function() {
				Main.init();
				Login.init();
		});
	</script>
	</body>
</html>