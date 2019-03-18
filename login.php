<?php 
 include 'lib/seeeion.php';
 session::int();
 include 'config/config.php';
 include 'lib/Database.php';
?>
<?php
$db=new Database();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">

   <?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
   	$username=mysqli_real_escape_string($db->link,$_POST['username']);
	$password=mysqli_real_escape_string($db->link,$_POST['password']);
	$query="SELECT * FROM tbl_login WHERE username='$username' AND password='$password' ";
	$select=$db->select($query);
	if($select){
		$result=$select->fetch_assoc();
        session::set("login",true);
        session::set("id",$result['id']);
        session::set("password",$result['password']);
        session::set("username",$result['username']);
        session::set("email",$value['email']);
        $id=$result['id'];
        $query="UPDATE tbl_login
                            SET
                            active='1'
                            WHERE id='$id'";
                            $update=$db->update($query);
                            if($update){
                               	echo"<script> window.location='index.php'</script>";
                            }else{
                            	echo "some wrong";
                           }
	}else{
      echo "user name & password not match";
	}
   }
   ?>

	<section id="content">
	
		<form action="login.php" method="post">
			<h1>Sign in</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="signup.php">New Here, Create a Account Now</a>
		</div>
	</section><!-- content -->
</div><!-- container -->
</body>
</html>