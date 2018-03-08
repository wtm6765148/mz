<?php

require("init.php");
session_start();
@$uid=$_SESSION["webusername"];
$nickname=$_REQUEST['nickname'];
$name=$_REQUEST['name'];
$sex=$_REQUEST['sex'];
$year=$_REQUEST['year'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
if($nickname==""){
	echo "";
	exit();
}
if($name==""){
	echo "";
	exit();
}
if($sex==""){
	echo "";
	exit();
}
if($year==""){
	echo "";
	exit();
}
if($month==""){
	echo "";
	exit();
}
if($day==""){
	echo "";
	exit();
}
if($phone==""){
	echo "";
	exit();
}
if($email==""){
	echo "";
	exit();
}
$sql="UPDATE xz_login SET nickname='$nickname' ,name='$name' ,sex='$sex' ,year='$year' ,month='$month',day='$day',phone='$phone' ,email='$email' WHERE username = '$uid' ";

$result=mysqli_query($conn,$sql);
if($result==true){
		
		echo "<script>alert('保存成功');location.href='../person/information.php'</script>";
	
	}



?>