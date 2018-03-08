<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>结算页面</title>

		<link href="../AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

		<link href="../basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="../css/cartstyle.css" rel="stylesheet" type="text/css" />

		<link href="../css/jsstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="../js/address.js"></script>
		<style>
			.J_MakePoint img{
				width:80px;
				height:80px
			
			}
		</style>	
	</head>

	<body>

		<!--顶部导航条 -->
		<?php include("../include/top.php")?>

			<div class="clear"></div>
			<div class="concent">
				<!--地址 -->
				<div class="paycont">
					<div class="address">
						<h3>确认收货地址 </h3>
						<div class="control">
							<div class="tc-btn createAddr theme-login am-btn am-btn-danger">使用新地址</div>
						</div>
						<div class="clear"></div>
						<ul>
							<div class="per-border"></div>
							
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
									<a href='javascript:void(0);' onclick='delClick(this);'><i class='am-icon-trash'></i></a><a href='../shop/shopaddress.php?id={$v['uname']}'id='delete'>删除</a>
								</div>
							</li>";
}

?>
						</ul>

						<div class="clear"></div>
					</div>
					<!--物流 -->
					<div class="logistics">
						<h3>选择物流方式</h3>
						<ul class="op_express_delivery_hot">
							<li data-value="yuantong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -468px"></i>圆通<span></span></li>
							<li data-value="shentong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -1008px"></i>申通<span></span></li>
							<li data-value="yunda" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -576px"></i>韵达<span></span></li>
							<li data-value="zhongtong" class="OP_LOG_BTN op_express_delivery_hot_last "><i class="c-gap-right" style="background-position:0px -324px"></i>中通<span></span></li>
							<li data-value="shunfeng" class="OP_LOG_BTN  op_express_delivery_hot_bottom"><i class="c-gap-right" style="background-position:0px -180px"></i>顺丰<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--支付方式-->
					<div class="logistics">
						<h3>选择支付方式</h3>
						<ul class="pay-list">
							<li class="pay card"><img src="../images/wangyin.jpg" />银联<span></span></li>
							<li class="pay qq"><img src="../images/weizhifu.jpg" />微信<span></span></li>
							<li class="pay taobao"><img src="../images/zhifubao.jpg" />支付宝<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--订单 -->
					<div class="concent">
						<div id="payTable">
							<h3>确认订单信息</h3>
							<div class="cart-table-th">
								<div class="wp">

									<div class="th th-item">
										<div class="td-inner">商品信息</div>
									</div>
									<div class="th th-price">
										<div class="td-inner">单价</div>
									</div>
									<div class="th th-amount">
										<div class="td-inner">数量</div>
									</div>
									<div class="th th-sum">
										<div class="td-inner">金额</div>
									</div>
									<div class="th th-oplist">
										<div class="td-inner">配送方式</div>
									</div>

								</div>
							</div>
							<div class="clear"></div>

							<?php
								 $id=$_SESSION["id"];
								 $count=$_SESSION["count"];
								 $total=$_SESSION["total"];
								 $a=$_SESSION["a"];
								 $b=$_SESSION["b"];

							
								require("../conmon/init.php");
								$sql="select img,title,futitle,price,promise from xz_laptop where lid='$id'";
								$result=mysqli_query($conn,$sql);
								$row=mysqli_fetch_all($result,1);
								
								foreach($row as $v){
									echo "<tr id='J_BundleList_s_1911116345_1' class='item-list'>
								<div id='J_Bundle_s_1911116345_1_0' class='bundle  bundle-last'>
									<div class='bundle-main'>
										<ul class='item-content clearfix'>
											<div class='pay-phone'>
												<li class='td td-item'>
													<div class='item-pic'>
														<a href='#' class='J_MakePoint'>
															",$v['img'],"</a>
													</div>
													<div class='item-info'>
														<div class='item-basic-info'>
															<a href='#' target='_blank' title=",$v['title']," class='item-title J_MakePoint' data-point='tbcart.8.11'>",$v['title'],"</a>
														</div>
													</div>
												</li>
												<li class='td td-info'>
													<div class='item-props'>
														<span class='sku-line'>口味：",$a,"</span>
														<span class='sku-line'>包装：",$b,"</span>
													</div>
												</li>
												<li class='td td-price'>
													<div class='item-price price-promo-promo'>
														<div class='price-content'>
															<em class='J_Price price-now'>",$v['price'],"</em>
														</div>
													</div>
												</li>
											</div>

											<li class='td td-amount'>
												<div class='amount-wrapper '>
													<div class='item-amount '>
														<span class='phone-title'>购买数量</span>
														<div class='sl'>
															<input class='min am-btn' name='' type='button' value='-' onlick='a()'/>
															<input class='text_box' name='' type='text' value='",$count,"' style='width:30px;' onkeyup='a()'/>
															<input class='add am-btn' name='' type='button' value='+' onclick='a()'/>
														</div>
													</div>
												</div>
											</li>
											<li class='td td-sum'>
												<div class='td-inner'>
													<em tabindex='0' class='J_ItemSum number'>",$total,"</em>
												</div>
											</li>
											<li class='td td-oplist'>
												<div class='td-inner'>
													<span class='phone-title'>配送方式</span>
													<div class='pay-logis'>
														包邮
													</div>
												</div>
											</li>

										</ul>
										<div class='clear'></div>

									</div>
							</tr>
							</div>
							<div class='clear'></div>";
								}
									
							?>
							

							
							<div class="pay-total">
						<!--留言-->
							<div class="order-extra">
								<div class="order-user-info">
									<div id="holyshit257" class="memo">
										<label>买家留言：</label>
										<input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
										<div class="msg hidden J-msg">
											<p class="error">最多输入500个字符</p>
										</div>
									</div>
								</div>

							</div>
							<!--优惠券 -->
							<div class="buy-agio">
								<li class="td td-coupon">

									<span class="coupon-title">优惠券</span>
									<select data-am-selected>
										<option value="a">
											<div class="c-price">
												<strong>￥8</strong>
											</div>
											<div class="c-limit">
												【消费满95元可用】
											</div>
										</option>
										<option value="b" selected>
											<div class="c-price">
												<strong>￥3</strong>
											</div>
											<div class="c-limit">
												【无使用门槛】
											</div>
										</option>
									</select>
								</li>

								<li class="td td-bonus">

									<span class="bonus-title">红包</span>
									<select data-am-selected>
										<option value="a">
											<div class="item-info">
												¥50.00<span>元</span>
											</div>
											<div class="item-remainderprice">
												<span>还剩</span>10.40<span>元</span>
											</div>
										</option>
										<option value="b" selected>
											<div class="item-info">
												¥50.00<span>元</span>
											</div>
											<div class="item-remainderprice">
												<span>还剩</span>50.00<span>元</span>
											</div>
										</option>
									</select>

								</li>

							</div>
							<div class="clear"></div>
							</div>
							<!--含运费小计 -->
							<div class="buy-point-discharge ">
								
							</div>

							<!--信息 -->
							<div class="order-go clearfix">
								<div class="pay-confirm clearfix">
									<div class="box">
										<div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
											<span class="price g_price ">
                                    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee"><?php echo $total?></em>
											</span>
										</div>

										<div id="holyshit268" class="pay-address">

											<p class="buy-footer-address">
												<span class="buy-line-title buy-line-title-type">寄送至：</span>
												<span class="buy--address-detail">
								   <span class="province">湖北</span>省
												<span class="city">武汉</span>市
												<span class="dist">洪山</span>区
												<span class="street">雄楚大道666号(中南财经政法大学)</span>
												</span>
												</span>
											</p>
											<p class="buy-footer-address">
												<span class="buy-line-title">收货人：</span>
												<span class="buy-address-detail">   
                                         <span class="buy-user">艾迪 </span>
												<span class="buy-phone">15871145629</span>
												</span>
											</p>
										</div>
									</div>

									<div id="holyshit269" class="submitOrder">
										<div class="go-btn-wrap">
											<a id="J_Go" href="success.php" class="btn-go" tabindex="0" title="点击此按钮，提交订单">提交订单</a>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
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
							<em>© 2015-2025 Hengwang.com 版权所有. </em>
						</p>
					</div>
				</div>
			</div>
			<div class="theme-popover-mask"></div>
			<div class="theme-popover">

				<!--标题 -->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add address</small></div>
				</div>
				<hr/>

				<div class="am-u-md-12">
					
			
					<form class="am-form am-form-horizontal"method="post" action="../shop/shopaddressSava.php">

						<div class="am-form-group">
							<label for="user-name" class="am-form-label">收货人</label>
							<div class="am-form-content">
								<input type="text" id="user-name" placeholder="收货人"name="uname">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">手机号码</label>
							<div class="am-form-content">
								<input id="user-phone" placeholder="手机号必填" type="text"name="phone">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">所在地</label>
							<div class="am-form-content address">
								<select data-am-selected name="shengfen">
									<option value="浙江省">浙江省</option>
									<option value="湖北省">湖北省</option>
								</select>
								<select data-am-selected name="city">
									<option value="温州市">温州市</option>
									<option value="武汉市">武汉市</option>
								</select>
								<select data-am-selected name="diqu">
									<option value="瑞安区">瑞安区</option>
									<option value="洪山区">洪山区</option>
								</select>
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-intro" class="am-form-label">详细地址</label>
							<div class="am-form-content">
								<textarea class="" rows="3" id="user-intro" placeholder="输入详细地址"name="context"></textarea>
								<small>100字以内写出你的详细地址...</small>
							</div>
						</div>

						<div class="am-form-group theme-poptit">
							<div class="am-u-sm-9 am-u-sm-push-3">
								<input type="submit" name="" value="保存" class="am-btn am-btn-primary am-btn-sm"style="background:#dd514c;border:0">
								<div class="am-btn am-btn-danger close">取消</div>
							</div>
						</div>
					</form>
				</div>

			</div>

			<div class="clear"></div>
			<script>
			
		function a(){
			
			var count=$(".text_box").val();
			var price=$(".J_Price").html();
			$("#J_ActualFee").html((count*price).toFixed(2));
			$(".J_ItemSum").html((count*price).toFixed(2));	
			}
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
	</body>

</html>