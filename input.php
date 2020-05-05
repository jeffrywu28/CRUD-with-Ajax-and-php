<?php
	require_once("connect.php");
	if(isset($_POST["nama"]) && isset($_POST["harga"])){
		$nama =  $_POST["nama"];
		$harga = $_POST["harga"];
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
     		$nama=preg_replace('/[^A-Za-z\-]/', '', $nama);
    	}
		$q = mysqli_query($db, "insert into data values(0, '".$nama."',".$harga.")"); 
	}
?>