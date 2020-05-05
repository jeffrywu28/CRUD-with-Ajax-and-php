<?php
	require_once("connect.php");

	$q=mysqli_query($db, "select * from data");
	$arr=[];
	while($res = mysqli_fetch_assoc($q)){
		array_push($arr, $res);
	}
	echo json_encode($arr);
?>