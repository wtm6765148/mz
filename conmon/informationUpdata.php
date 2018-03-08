<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>个人资料</title>

		<link href="../AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="../AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="../css/personal.css" rel="stylesheet" type="text/css">
		<link href="../css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="../AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="../AmazeUI-2.4.2/assets/js/amazeui.js"></script>	
		<style>
			#upfile{margin-left:100px;}
			#uplude{position:absolute;left:400px;top:264px}
		</style>
	</head>

	<body>
		<!--头 -->
		<?php include("../include/top.php")?>
            <div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
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

					<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr/>

						<!--头像 -->
						<div class="user-infoPic">

							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
								<img class="am-circle am-img-thumbnail" src="../upfile/<?php echo $_SESSION['img'];?>" alt="" />
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i><?php echo $uid?></i></b></div>
								<div class="vip">
                                      <span></span><a href="#">会员专享</a>
								</div>
							</div>
						</div>

						<!--个人信息 -->
					<div class='info-main'>
						<?php
							if (isset($_FILES['imgfile']) 
							&& is_uploaded_file($_FILES['imgfile']['tmp_name']))
							{
							$imgFile = $_FILES['imgfile'];
							$upErr = $imgFile['error'];
							if ($upErr == 0)
							{
							$imgType = $imgFile['type']; //文件类型。
							/* 判断文件类型，这个例子里仅支持jpg和gif类型的图片文件。*/
							if ($imgType == 'image/jpeg'
							|| $imgType == 'image/gif')
							{
							$imgFileName = $imgFile['name'];
							$imgSize = $imgFile['size'];
							$imgTmpFile = $imgFile['tmp_name'];
							/* 将文件从临时文件夹移到上传文件夹中。*/
							move_uploaded_file($imgTmpFile, '../upfile/'.$imgFileName);
							/*显示上传后的文件的信息。*/
							$strPrompt = sprintf("文件%s上传成功<br>"
							. "<img src='../upfile/%s'>"
							, $imgFileName, $imgFileName
							);
							echo $strPrompt;
							$_SESSION['img']=$imgFileName;
							}
							else
							{
							echo "请选择jpg或gif文件，不支持其它类型的文件。";
							}
									}
							else
							{
							echo "文件上传失败。<br>";
							switch ($upErr)
							{
							case 1:
								echo "超过了php.ini中设置的上传文件大小。";
							break;
							case 2:
							 echo "超过了MAX_FILE_SIZE选项指定的文件大小。";
							break;
							case 3:
							echo "文件只有部分被上传。";
							break;
							case 4:
							 echo "文件未被上传。";
							break;
							case 5:
							echo "上传文件大小为0";
							break;
							}
							}
							}
							else
							{
							/*显示表单。*/


							}
							echo "<form action='' method='post' enctype='multipart/form-data' name='upload_form'>
								<label for='user-name2' class='am-form-label'>头像</label>
								<input name='imgfile' type='file' accept='image/gif, image/jpeg'/id='upfile'>
								<input name='upload' type='submit' value='上传' /id='uplude'>
								</form>";
						?>
							<form class='am-form am-form-horizontal'method='post' action='../conmon/loginData.php'>

								<div class='am-form-group'>
									<label for='user-name2' class='am-form-label'>昵称</label>
									<div class='am-form-content'>
										<input type='text' id='user-name2' placeholder='nickname'name='nickname'maxlength='10'>
                                          <small>昵称长度不能超过10个汉字</small>
									</div>
								</div>

								<div class='am-form-group'>
									<label for='user-name' class='am-form-label'>姓名</label>
									<div class='am-form-content'>
										<input type='text' id='user-name2' placeholder='name'name='name'maxlength='10'>
                                         
									</div>
								</div>

								<div class='am-form-group'>
									<label class='am-form-label'>性别</label>
									<div class='am-form-content sex'>
										<label class='am-radio-inline'>
											<input type='radio' name='sex' value='男' data-am-ucheck> 男
										</label>
										<label class='am-radio-inline'>
											<input type='radio' name='sex' value='女' data-am-ucheck> 女
										</label>
									</div>
								</div>

								<div class='am-form-group'>
									<label for='user-birth' class='am-form-label'>生日</label>
									<div class='am-form-content birth'>
										<div class='birth-select'>
											<select data-am-selected name='year'>
												<option value='2015'>2015</option>
												<option value='2014'>1987</option>
											</select>
											<em>年</em>
										</div>
										<div class='birth-select2'>
											<select data-am-selected name='month'>
												<option value='12'>12</option>
												<option value='8'>8</option>
											</select>
											<em>月</em></div>
										<div class='birth-select2'>
											<select data-am-selected name='day'>
												<option value='21'>21</option>
												<option value='23'>23</option>
											</select>
											<em>日</em></div>
									</div>
							
								</div>
								<div class='am-form-group'
									<label for='user-phone' class='am-form-label'>电话</label>
									<div class='am-form-content'style='margin-top:-22px'>
										<input id='user-phone' placeholder='telephonenumber' type='tel'name='phone'maxlength='20'>

									</div>
								</div>
								<div class='am-form-group'>
									<label for='user-email' class='am-form-label'>电子邮件</label>
									<div class='am-form-content'>
										<input id='user-email' placeholder='Email' type='email'name='email'>

									</div>
								</div>
								<div class='am-form-group address'>
									<label for='user-address' class='am-form-label'>收货地址</label>
									<div class='am-form-content address'>
										<a href='address.html'>
											<p class='new-mu_l2cw'>
												<span class='province'>湖北</span>省
												<span class='city'>武汉</span>市
												<span class='dist'>洪山</span>区
												<span class='street'>雄楚大道666号(中南财经政法大学)</span>
												<span class='am-icon-angle-right'></span>
											</p>
										</a>

									</div>
								</div>
								<div class='am-form-group safety'>
									<label for='user-safety' class='am-form-label'>账号安全</label>
									<div class='am-form-content safety'>
										<a href='safety.html'>

											<span class='am-icon-angle-right'></span>

										</a>

									</div>
								</div>
								<div class='info-btn'>
									<input type='submit'value='提交资料'style='color: #fff;
									 background-color: #dd514c;padding:5px;border-color:#ff6633'>
								</div>

							</form>
						</div>

					</div>

							
							
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
							<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
						</p>
					</div>
				</div>
			</div>

			<?php include("../conmon/loginLeft.php") ?>
		</div>

	</body>

</html>