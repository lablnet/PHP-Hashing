<?php 
	use Lablnet\Hashing;
	require '../vendor/autoload.php';
	
	$hashing = new Hashing();
	
	//Original password
	$password = 123456;
	//Password Hash
	$password_hash = $hashing->make($password);
	echo $password_hash;
	echo "<br>";
	//Verify
	$verify = $hashing->verify($password,$password_hash);
	var_dump($verify);
	