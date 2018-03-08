
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>购物车页面</title>

		<link href="../AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="../basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="../css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="../css/optstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="../js/jquery.js"></script>
		<style>
			.item-pic img{
				width:80px;
				height:80px;
			
			}
			#msg{
				margin-left:420px;
				margin-top:50px
			}
		</style>
	</head>

	<body>

			<?php include('../include/top.php')?>
			<!--购物车 -->
			<div class="concent">
		
				<div id="cartTable">
					<div class="cart-table-th">
						<div class="wp">
							<div class="th th-chk">
								<div id="J_SelectAll1" class="select-all J_SelectAll">

								</div>
							</div>
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
							<div class="th th-op">
								<div class="td-inner">操作</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>

					<tr class="item-list">
						<div class="bundle  bundle-last ">
							<div class="bundle-hd">
								<div class="bd-promos">
									
									
									<span class="list-change theme-login">编辑</span>
								</div>
							</div>
							<div class="clear"></div>
							
						</div>
					</tr>
					<div class="clear"></div>

					<tr class="item-list">
						<div class="bundle  bundle-last ">
							<div class="bundle-hd">
								<div class="bd-promos">
									
									<span class="list-change theme-login">编辑</span>
								</div>
							</div>
							<div class="clear"></div>
							<div class="bundle-main">
								<ul class="item-content clearfix">
								<?php
									
									require("../conmon/init.php");
									@$id=$_SESSION['id'];
									@$sum=$_SESSION['sum'];
									@$a=$_SESSION['a'];
									@$b=$_SESSION['b'];
									if($id!=""){
									$sql="select * from xz_laptop where lid='$id'";
									$result=mysqli_query($conn,$sql);
									$row=mysqli_fetch_all($result,1);

									foreach($row as $v){	
									}
									@$total=$v['price']*$sum;
									
									echo "<li class='td td-chk'>
										<div class='cart-checkbox '>
											<input class='check' id='J_CheckBox' name='items[]' value='170769542747' type='checkbox'>
											<label for='J_CheckBox_170769542747'></label>
										</div>
									</li>
									
									<li class='td td-item'>
										<div class='item-pic'>
											<a href='#' target='_blank' data-title='美康粉黛醉美东方唇膏口红正品 持久保湿滋润防水不掉色护唇彩妆' class='J_MakePoint' data-point='tbcart.8.12'>
												",$v['img'],"</a>
										</div>
										<div class='item-info'>
											<div class='item-basic-info'>
												<a href='#' target='_blank' title='美康粉黛醉美唇膏 持久保湿滋润防水不掉色' class='item-title J_MakePoint' data-point='tbcart.8.11'>",$v['title'],'<br>',$v['futitle'],"</a>
											</div>
										</div>
									</li>
									<li class='td td-info'>
										<div class='item-props item-props-can'>
											<span class='sku-line'>口味：", $a,"</span>
											<span class='sku-line'>包装：", $b,"</span>
											<span tabindex='0' class='btn-edit-sku theme-login'>修改</span>
											<i class='theme-login am-icon-sort-desc'></i>
										</div>
									</li>
									<li class='td td-price'>
										<div class='item-price price-promo-promo'>
											<div class='price-content'>
												<div class='price-line'>
													<em class='price-original'>",$v['promise'],"</em>
												</div>
												<div class='price-line'>
													<em class='J_Price price-now' tabindex='0'>",$v['price'],"</em>
												</div>
											</div>
										</div>
									</li>
									<li class='td td-amount'>
										<div class='amount-wrapper '>
											<div class='item-amount '>
												<div class='sl'>
													<input class='min am-btn' name='' type='button' value='-' onclick='a()'/>
													<input class='text_box' name='' type='text' value=", $sum," style='width:30px;' onkeyup='a()'/>
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
									<li class='td td-op'>
										<div class='td-inner'>
											<a title='移入收藏夹' class='btn-fav' href='#'>
                  移入收藏夹</a>
											<a data-point-url='#' class='delete'id='delete'onclick='firm()'>
                  删除</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</tr>
				</div>
				<div class='clear'></div>

				<div class='float-bar-wrapper'>
					<div id='J_SelectAll2' class='select-all J_SelectAll'>
						<div class='cart-checkbox'>
							<input class='check-all check' id='J_SelectAllCbx2' name='select-all' value='true' type='checkbox'>
							<label for='J_SelectAllCbx2'></label>
						</div>
						<span>全选</span>
					</div>
					<div class='operations'>
						<a href='#' hidefocus='true' class='deleteAll'>删除</a>
						<a href='#' hidefocus='true' class='J_BatchFav'>移入收藏夹</a>
					</div>
					<div class='float-bar-right'>
						<div class='amount-sum'>
							<span class='txt'>已选商品</span>
							<em id='J_SelectedItemsCount'>",$sum,"</em><span class='txt'>件</span>
							<div class='arrow-box'>
								<span class='selected-items-arrow'></span>
								<span class='arrow'></span>
							</div>
						</div>
						<div class='price-sum'>
							<span class='txt'>合计:</span>
							<strong class='price'>¥<em id='J_Total'>",$total,"</em></strong>
						</div>
						<div class='btn-area'>
							<a href='' id='J_Go' class='submit-btn submit-btn-disabled' aria-label='请注意如果没有选择宝贝，将无法结算'>
								<span>结&nbsp;算</span></a>
						</div>
					</div>";
									
									}else{
									
									echo "<div id='msg'>你还没有添加购物车</div>";
									
									}
									
									
								
									
										
									
						
									
?>
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
							<em>© 2015-2025 Hengwang.com</em>
						</p>
					</div>
				</div>

			</div>

			<!--操作页面-->

			<div class="theme-popover-mask"></div>

			<div class="theme-popover">
				<div class="theme-span"></div>
				<div class="theme-poptit h-title">
					<a href="javascript:;" title="关闭" class="close">×</a>
				</div>
				<div class="theme-popbod dform">
					<form class="theme-signin" name="loginform" action="" method="post">

						<div class="theme-signin-left">

							<li class="theme-options">
								<div class="cart-title">颜色：</div>
								<ul>
									<li class="sku-line selected">12#川南玛瑙<i></i></li>
									<li class="sku-line">10#蜜橘色+17#樱花粉<i></i></li>
								</ul>
							</li>
							<li class="theme-options">
								<div class="cart-title">包装：</div>
								<ul>
									<li class="sku-line selected">包装：裸装<i></i></li>
									<li class="sku-line">两支手袋装（送彩带）<i></i></li>
								</ul>
							</li>
							<div class="theme-options">
								<div class="cart-title number">数量</div>
								<dd>
									<input class="min am-btn am-btn-default" name="" type="button" value="-" />
									<input class="text_box" name="" type="text" value="1" style="width:30px;" />
									<input class="add am-btn am-btn-default" name="" type="button" value="+" />
									<span  class="tb-hidden">库存<span class="stock">1000</span>件</span>
								</dd>

							</div>
							<div class="clear"></div>
							<div class="btn-op">
								<div class="btn am-btn am-btn-warning">确认</div>
								<div class="btn close am-btn am-btn-warning">取消</div>
							</div>

						</div>
						<div class="theme-signin-right">
							<div class="img-info">
								<img src="../images/kouhong.jpg_80x80.jpg" />
							</div>
							<div class="text-info">
								<span class="J_Price price-now">¥39.00</span>
								<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
							</div>
						</div>

					</form>
				</div>
			</div>
		<!--引导 -->
		<div class="navCir">
			<li><a href="home2.html"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
			<li class="active"><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li><a href="../person/index.html"><i class="am-icon-user"></i>我的</a></li>					
		</div>
	</body>
	<script>
	
		function a(){
			
		var count=$(".text_box").val();
		var price=$(".J_Price").html();
		$("#J_Total").html((count*price).toFixed(2));
		$(".J_ItemSum").html((count*price).toFixed(2));	
			}
		$("#delete").click(function(){
		 
			
		
		})
		function firm() {  
        //利用对话框返回的值 （true 或者 false）  
        if (confirm("你确定提交吗？")) {  
				location.href="../shop/shopcartDelete.php?lid=<?php echo $id?>";
        }  
        else {  
          
        }  
  
    }  
		$("#J_Go").click(function(){
		
				var count=$(".text_box").val();
				var total=$("#J_Total").html();
				jQuery.ajax({
				
					url:"../shop/shopcartSava.php",
					type:"POST",
					data:"b=<?php echo $b?>&a=<?php echo $a?>&count="+count+"&total="+total+"&id=<?php echo $id?>",
					success:function(data){
					
						switch(data){
							case '0':

								alert('请重新输入购买数量');
								break;
							case '1':

								location.href='pay.php';
								break;
							case '2':

								alert('库存不足');
								break;
							
							default:
								alert(1213);
								break;
						}
					
					},
					error:function(){
						
					}
				})
		
		})
	</script>
</html>