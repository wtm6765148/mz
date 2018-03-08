<?php 
session_start();

unset($_SESSION['id']);
unset($_SESSION['sum']);
unset($_SESSION['a']);
unset($_SESSION['b']);

require("../conmon/init.php");

$lid=$_GET['lid'];

$sql="delete from xz_dingdan where sid='$lid'";

$result=mysqli_query($conn,$sql);

if($result==true){
	
	echo "<script>location.href='../home/shopcart.php';alert('删除成功')</script>";

}
?>