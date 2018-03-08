<?php

session_start();
	
	require('../conmon/init.php');

	$a=$_POST['a'];

	$b=$_POST['b'];
	
	$uid=$_POST['uid'];
	
	$id=$_POST['lid'];

	$sum=$_POST['sum'];

	if($uid==""){
		
		echo 'nologin';
		exit();
	
	}

    $sql="insert into xz_gouwuche values('null','$id','$uid','null','null','null','$a','$b','$sum','null','null','null')";

	$result=mysqli_query($conn,$sql);
	if($result==true){
	
		echo 1;

	}
	
	
		

?>
