<?php 

require("../conmon/init.php");

$sql="select * from xz_laptop where lid=1";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_all($result);

foreach($row as $v){	
}

?>