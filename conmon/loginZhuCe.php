<?php

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
if($row>0){

	echo "<script>alert('用户名已存在');location.href='../home/register.html'</script>";
	exit();

}
$sql="insert into xz_login values('','$username','$password','','','','','','','','')";
$result=mysqli_query($conn,$sql);
if($result==true){

	echo "<div id='ad'>恭喜您，您已经注册成功！</div>
	<div>
		<p>恭喜您，您已经成功注册Orange lala.网会员</p>
		<p>您进入Orange lala.网的信息如下;</p>
		<p><span>账户：",$username,"</span></p>
		<p><span>密码：",$password,"</span></p>
		<p>声明：以上信息只做信息展示所用，不会用作其他。</p>
	</div>
	<button><a href='../home/login.php'>登录Orange lala.</a></button>";
	
}else{

	echo '注册失败';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
		#ad{
			color:blue;
			font-size:30px;
			font-weight:bold;
			margin:24px
		}
		p{margin-left:50px}
		span{color:#ff850b}
		button{width:200px;
			height:50px;
			background:#ff9900;
			border:0px;
			margin-left:100px;
			font-weight:bold;
			font-size:20px}
		a{text-decoration:none;
			color:#fff;}
	</style>
<body>

</body>
</html>	