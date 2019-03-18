<?php include 'inc/header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title> Rasel Shout Box</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<div class="wrapper clr">
		<section class="content clr">
			<?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$password=$_POST['password'];
				$newpassword=$_POST['newpassword'];
				$query="SELECT * FROM tbl_login WHERE password='$password'";
				$select=$db->select($query);
				if(!$select){
					echo "Not match password your old";
				}else{
					$id=session::get("id");
					 $query="UPDATE tbl_login
                            SET
                            password='$newpassword'
                            WHERE id='$id'";
                            $update=$db->update($query);
                            if($update){
                            	echo "update successfully";
                            		echo"<script> window.location='index.php'</script>";
                            }else{
                            	echo "not update";
                            }
				}
		}
			?>
			<div class="shoutbox clr">
				<form action="" method="POST">
					
					<table>
						<tr>
							<td>Old password</td>
							<td>:</td>
							<td><input type="password" name="password" placeholder="give old password"></td>
						</tr>

						<tr>
							<td>New password</td>
							<td>:</td>
							<td><input type="password" name="newpassword" placeholder="give old password"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" value="submit"></td>
						</tr>
					</table>
				</form>
				
			</div>
		</section>
		<?php include 'inc/footer.php';?>
		
	</div>

</body>
</html>
