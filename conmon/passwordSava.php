<?php

	require("../conmon/init.php");
	session_start();
    
	@$uid=$_SESSION["webusername"];
	@$upwd=$_SESSION["webpassword"];
	@$oldpassword=$_REQUEST['oldpassword'];
	@$newpassword=$_REQUEST['newpassword'];
	if($uid==''){
		echo '';
		exit();
	}
	if($upwd==''){
		echo '';
		exit();
	}
	if($newpassword==''){
		echo '';
		exit();
	}
	if($oldpassword==''){
		echo '';
		exit();
	}
	if($upwd!=$oldpassword){

		echo "<script>alert('密码不正确');location.href='../person/password.php'</script>";
		exit();
	
	}
	$sql="UPDATE xz_login SET password = '$newpassword' WHERE username='$uid' ";
	$result=mysqli_query($conn,$sql);
	if($result==true){
		
		echo "<script>alert('修改成功，请重新登录');location.href='../home/login.php'</script>";
		exit();
	
	}
?>