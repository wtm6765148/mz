<?php

require("init.php");
session_start();
@$uid=$_SESSION["webusername"];
@$uname=$_REQUEST['uname'];
@$phone=$_REQUEST['phone'];
@$shengfen=$_REQUEST['shengfen'];
@$city=$_REQUEST['city'];
@$diqu=$_REQUEST['diqu'];
@$context=$_REQUEST['context'];
if($uname==''){
	echo '';
	exit();
}
if($phone==''){
	echo '';
	exit();
}
if($shengfen==''){
	echo '';
	exit();
}
if($city==''){
	echo '';
	exit();
}
if($diqu==''){
	echo '';
	exit();
}
if($context==''){
	echo '';
	exit();
}
$sql="UPDATE xz_address SET uname='$uname' ,phone='$phone' ,shengfen='$shengfen' ,city='$city' ,diqu='$diqu',context='$context' WHERE lid = (select uid from xz_login where username='$uid') ";
$result=mysqli_query($conn,$sql);
if($result==true){
	echo "<script>alert('添加成功');location.href='../person/address.php'</script>";

}