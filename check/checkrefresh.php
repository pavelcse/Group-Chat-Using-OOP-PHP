<?php
include '../lib/seeeion.php';
session::cheeksession();
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

	$pro = new Project();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$neme = session::get("username");
		$body = $_POST['body'];
		$checkref     = $pro->autoRefresh($neme, $body);
	}
?>
