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
<title>Singup</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
    <script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<div class="container">
	<section id="content">
	
		<form action="signup.php" method="post">
			<h1>SingUp</h1>
			<div>
				<input type="text" placeholder="Username"  name="username" id="username" />
			</div>
			<span id="userstatus"></span>
			<div>
				<input type="password" placeholder="Password"  name="password" />
				<?php if(isset($passmsg)){echo $passmsg;}?>
			</div>
			<div>
				<input type="text" placeholder="email"  name="email" id="email" />
				<?php if(isset($emailmsg)){echo $emailmsg;}?>
			</div>
			<span id="emailstatus"></span>
			<div>
				<input type="submit" value="Singup" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="login.php">Already Have a Account? Login Now</a>
		</div>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>