<?php
	session_start();
require("init.php");
@$username=$_REQUEST['username'];
@$password=$_REQUEST['password'];

if($username==""){
	echo "";
	exit();
}
if($password==""){
	echo "";
	exit();
}


$sql="select * from xz_login where username='$username'";
$result=mysqli_query($conn,$sql);
$row=mysqli_affected_rows($conn);
if($row!=1){
	
   echo "<script>alert('用户名不正确');location.href='../home/login.php'</script>";
	
}else{
	
	
	$_SESSION["webusername"]=$username;
	
}

$sql="select * from xz_login where password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_affected_rows($conn);
if($row!=1){
	
  echo "<script>alert('密码不正确');location.href='../home/login.php'</script>";
	
}else{
	
	echo "<script>alert('欢迎回来');location.href='../home/home3.php'</script>";
	$_SESSION["webpassword"]=$password;
	

}



?>