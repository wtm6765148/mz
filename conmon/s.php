<?php

require("init.php");

$sql="select * from xz_address LIMIT 0,3";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result,1);
foreach($row as $v){
  echo "<li>",$v['uname'],"</li>";
  echo "<li>",$v['phone'],"</li>";
  echo "<li>",$v['shengfen'],"</li>";
  echo "<li>",$v['city'],"</li>";
  echo "<li>",$v['diqu'],"</li>";
  echo "<li>",$v['context'],"</li>";
  echo "<br>";
}

?>