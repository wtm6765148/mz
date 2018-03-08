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

	$sql="SELECT kucun FROM xz_laptop WHERE lid ='$id'";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_all($result);
	
	foreach($row as $v){
	
	}
	if($v[0]<$sum){
		echo 0;
		exit();
	
	}
	if($id!=""&&$sum!=""){
		echo 1;
	
	$_SESSION['sum']=$sum;

	$_SESSION['a']=$a;

	$_SESSION['b']=$b;

	$_SESSION['id']=$id;
	}
	

?>
