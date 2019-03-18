<?php include 'inc/header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Rasel Shout Box</title>
	<link rel="stylesheet" href="style.css"/>

	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
	<div class="wrapper clr">
		<section class="content clr">
			<div class="shoutbox clr">
				<table border="1">
					<tr>
						<th>User Name</th>
						<th>Online</th>
					</tr>
					<?php
    					$query="select * from tbl_login where active = '1'";
    					$select=$db->select($query);
    					if($select){
    						while($result=$select->fetch_assoc()){
					?>
					<tr>
						<td> <?php echo $result['username']; ?> </td>
						<td> <?php echo "Active"; ?> </td>
					</tr>
					<?php } }?>
				</table>
			</div>
		</section>
		<?php include 'inc/footer.php';?>
	</div>
</body>
</html>