<?php
	require_once("connect.php");
	
		$id = $_POST["id"];
		$nama = $_POST["nama"];
		$harga = $_POST["harga"];
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
     		$nama=preg_replace('/[^A-Za-z\-]/', '', $nama);
    	}
		$q = mysqli_query($db, "UPDATE data SET nama ='".$nama."',harga =".$harga." WHERE id = ".$id.""); 
?>