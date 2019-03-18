<?php 
include 'lib/seeeion.php';
session::cheeksession();
include 'lib/Database.php';
  include_once ('classes/Project.php');
  $db  = new Database();
  $pro = new Project();
?>
<?php
  if(isset($_GET['action']) && $_GET['action']=="logout"){
     session::destroy();
  	$id=session::get("id");
  	 $query="UPDATE tbl_login
        SET
        active='0'
        WHERE id='$id'";
        $update=$db->update($query);
        if($update){
           	echo"<script> windows.location='index.php'</script>";
        }else{
        	echo "some wrong";
        }
  }
    ?>
<header class="headsection">
	<h2><a href="index.php"> BackBench ShoutBox </a></h2>
	<a href="index.php">Home</a>
  <a href="changemas.php">Change Password</a>
  <a href="?action=logout">Logout</a>
  <a href="active.php">
      <span>Active 
        <?php $countUser=$pro->countUser(); ?>
      </span>
  </a>
</header>