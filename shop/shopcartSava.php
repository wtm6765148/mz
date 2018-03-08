<?php
session_start();
require("../conmon/init.php");

$id=$_POST['id'];

$count=$_POST['count'];

$total=$_POST['total'];

$a=$_POST['a'];

$b=$_POST['b'];


$sql="select * from xz_laptop where lid='$id'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_all($result,1);

foreach($row as $v){

	
}
if($count<=0){

	echo 0;
	exit();
}
if($count>$v['kucun']){

	echo 2;
	exit();
}


$result=mysqli_query($conn,$sql);

if($result==true){

	echo 1;
	$_SESSION["id"]=$id;
	$_SESSION["count"]=$count;
	$_SESSION["total"]=$total;
	$_SESSION["a"]=$a;
	$_SESSION["b"]=$b;

}
?>