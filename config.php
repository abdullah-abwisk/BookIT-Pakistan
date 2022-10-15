<?php	
	$host = "127.0.0.2";
	$port = "3307";
	$root = "root";
	$pwd = "";
	$dbname = "useraccount";
	
	$db = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $root ,$pwd);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>