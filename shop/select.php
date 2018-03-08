<?php 
	require("../conmon/init.php");
	
	$sum=$_POST['sum'];
	if($sum==""){
		exit();
	}

	$sql="select * from xz_laptop where title like '%$sum%' limit 0,4";
	
	$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_all($result,1);

	foreach($row as $v){
		echo "<li><div><a>",$v['title'],"</a></div></li>";
	
	}
?>