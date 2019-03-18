<?php 
 include 'config/config.php';
 include 'lib/Database.php';
?>
<?php
$db=new Database();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
   <?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
   	$username=mysqli_real_escape_string($db->link,$_POST['username']);
	$password=mysqli_real_escape_string($db->link,$_POST['password']);
	$email=mysqli_real_escape_string($db->link,$_POST['email']);
	if($username==""){
		$msg="enter the user name";
	}elseif($password==""){
		$passmsg="Enter the password";
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailmsg="Enetr the valid email";
	}else{
		$query="INSERT INTO tbl_login(Username,Password,email)VALUES('$username','$password','$email')";
		$insert=$db->insert($query);
		if($insert){
			echo "<script>alert('Account Created Successfully. Please Login...');</script>";
		}else{
			echo "<script>alert('Opps.. Something Seem Wrong. Please Try Again...!!!');</script>";
		}
	}
   }
   ?>

	<section id="content">
	
		<form action="signup.php" method="post">
			<h1>Signup as a New User</h1>
			<div>
				<input type="text" placeholder="Username"  name="username"/>
			    <?php if(isset($msg)){echo $msg;}?>

			</div>
			<div>
				<input type="password" placeholder="Password"  name="password"/>
				<?php if(isset($passmsg)){echo $passmsg;}?>
			</div>
			<div>
				<input type="text" placeholder="email"  name="email"/>
				<?php if(isset($emailmsg)){echo $emailmsg;}?>
			</div>
			<div>
				<input type="submit" value="Signup" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="login.php">Already Have an Account? Login Now</a>
		</div>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>