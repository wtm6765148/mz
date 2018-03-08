<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>地址管理</title>

		<link href="../AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="../AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="../css/personal.css" rel="stylesheet" type="text/css">
		<link href="../css/addstyle.css" rel="stylesheet" type="text/css">
		<script src="../AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="../AmazeUI-2.4.2/assets/js/amazeui.js"></script>

	</head>
<style>

</style>
	<body>
		<!--头 -->
		<?php
			include("../include/top.php");
		?>

		<div class="nav-table">
			<div class="long-title"><span class="all-goods">全部分类</span></div>
			<div class="nav-cont">
				<ul>
					<li class="index"><a href="../home/home3.php">首页</a></li>
					<li class="qc"><a href="#">闪购</a></li>
					<li class="qc"><a href="#">限时抢</a></li>
					<li class="qc"><a href="#">团购</a></li>
					<li class="qc last"><a href="#">大包装</a></li>
				</ul>
				<div class="nav-extra">
					<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
					<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
				</div>
			</div>
		</div>
		<b class="line"></b>

		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-address">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">地址管理</strong> / <small>Address&nbsp;list</small></div>
						</div>
						<hr/>
						<ul class="am-avg-sm-1 am-avg-md-3 am-thumbnails">
<?php

require("../conmon/init.php");

$sql="select * from xz_address LIMIT 0,3";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result,1);
foreach($row as $v){
 
	echo "<li class='user-addresslist '>
								<span class='new-option-r'><i class='am-icon-check-circle'></i>默认地址</span>
								<p class='new-tit new-p-re'>
									<span class='new-txt'id='uname'>",$v['uname'],"</span>
									<span class='new-txt-rd2'>",$v['phone'],"</span>
								</p>
								<div class='new-mu_l2a new-p-re'>
									<p class='new-mu_l2cw'>
										<span class='title'>地址：</span>
										<span class='province'>",$v['shengfen'],"</span>
										<span class='city'>",$v['city'],"</span>
										<span class='dist'>",$v['diqu'],"</span>
										<span class='street'>",$v['context'],"</span></p>
								</div>
								<div class='new-addr-btn'>
									<a href='../person/addressUpdata.php'><i class='am-icon-edit'></i>编辑</a>
									<span class='new-addr-bar'>|</span>
									<a href='javascript:void(0);' onclick='delClick(this);'><i class='am-icon-trash'></i></a><a href='../conmon/addressDelete.php?id={$v['uname']}'id='delete'>删除</a>
								</div>
							</li>";
}

?>
							

						</ul>
						<div class="clear"></div>
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加新地址</a>
						<!--例子-->
						<div class="am-modal am-modal-no-btn" id="doc-modal-1">

							<div class="add-dress">

								<!--标题 -->
								<div class="am-cf am-padding">
									<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add&nbsp;address</small></div>
								</div>
								<hr/>

								<div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;">
									<form class="am-form am-form-horizontal"id="form_login"  method="post"action="../conmon/addressSava.php">

										<div class="am-form-group">
											<label for="user-name" class="am-form-label">收货人</label>
											<div class="am-form-content">
												<input type="text" id="username" placeholder="收货人"name="uname"><span id="username_error"style="color:red"></span>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-phone" class="am-form-label">手机号码</label>
											<div class="am-form-content">
												<input id="phone" placeholder="手机号必填" type="text"name="phone">
												<span id="phone_error"style="color:red"></span>
											</div>
										</div>
										<div class="am-form-group">
											<label for="user-address" class="am-form-label">所在地</label>
											<div class="am-form-content address">
												<select data-am-selected name="shengfen">
													<option value="浙江省">浙江省</option>
													<option value="湖北省" selected >湖北省</option>
												</select>
												<select data-am-selected name="city">
													<option value="温州市">温州市</option>
													<option value="武汉市" selected>武汉市</option>
												</select>
												<select data-am-selected name="diqu">
													<option value="瑞安区">瑞安区</option>
													<option value="洪山区" selected>洪山区</option>
												</select>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-intro" class="am-form-label">详细地址</label>
											<div class="am-form-content">
												<textarea class="" rows="3" id="userintro" placeholder="输入详细地址"maxlength="100"name="context"></textarea>
												<span id="error"></span>
												<small>100字以内写出你的详细地址...</small>
											</div>
										</div>

										 <div class="am-cf"style="margin-left:150px;">
									<input type="submit" name="" value="保存" class="am-btn am-btn-primary am-btn-sm"style="background:#be2924">
								</div>
									</form>
								</div>

							</div>

						</div>

					</div>

					<script type="text/javascript">
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								$(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
							});
							
							var $ww = $(window).width();
							if($ww>640) {
								$("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
							}
							
						})
					</script>

					<div class="clear"></div>

				</div>
				<!--底部-->
				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="#">恒望科技</a>
							<b>|</b>
							<a href="#">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
					<div class="footer-bd">
						<p>
							<a href="#">关于恒望</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							<a href="#">网站地图</a>
							<em>© 2015-2025 Hengwang.com 版权所有.</em>
						</p>
					</div>
				</div>
			</div>

			<?php include("../conmon/loginLeft.php") ?>
		</div>

	</body>
	<script>
		$(function(){
			$("#form_login").submit(function(){
				
					if(!$("#username").val()){
					$("#username_error").html("请输入收货人");
						return false;
						
					}
					if(!$("#phone").val()){
					$("#phone_error").html("请输入手机号码");
						return false;
						
					}
					if(!$("#userintro").val()){
					$("#error").html("请输入你的详细地址");
						return false;
						
					}
					return true;
			})
		
		
		})
	$(".new-addr-btn").on("click","#delete",function(e){
			var r=window.confirm('确认删除吗？');
		if(r==true){
		
			alert('确定删除');
		}else{
		
			alert('返回')
			return false;
		}
	})
	</script>

</html>