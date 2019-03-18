<?php include 'inc/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Backbenchers Shout Box</title>
	<link rel="stylesheet" href="style.css"/>
	<script language="JavaScript" src="js/jquery.js"></script>
	<script language="JavaScript" src="js/main.js"></script>
</head>
<body>
	<div class="wrapper clr">		
		<section class="content clr">
			<div id="autostatus" class="box"></div>
			<div class="shoutbox clr">
				<form action="" method="POST">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input type="text" name="name" value="<?php echo session::get("username");?>">
							</td>
						</tr>

						<tr>
							<td>Body</td>
							<td>:</td>
							<td><input type="text" name="body" id="body"  placeholder="enter message"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" class="autosubmit" id="autosubmit" value="Shout"></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<?php include 'inc/footer.php';?>
	</div>
</body>
</html>