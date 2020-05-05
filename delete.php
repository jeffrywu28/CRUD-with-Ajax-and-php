<?php
	require_once("connect.php");
	$id = $_POST["id"];
	$q = mysqli_query($db, "DELETE FROM data WHERE id = ".$id.""); 
?>