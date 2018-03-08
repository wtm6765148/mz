<?php

require("init.php");
$uname=$_GET['id'];
$sql="delete from xz_address where uname='$uname' ";

$result=mysqli_query($conn,$sql);

if($result==true){

	  echo "<script>alert('删除成功');location.href='../person/address.php'</script>";

}


?>