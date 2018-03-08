<?php

session_start();
session_destroy();
$_SESSION=array();


echo "<script>alert('退出成功');location.href='../home/home3.php'</script>";
?>