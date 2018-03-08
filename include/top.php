<?php

	session_start();
	@$uid=$_SESSION["webusername"];
	@$upwd=$_SESSION["webpassword"];


?>
<style>
.topMessage a:hover{color:red}
#show{position:absolute;z-index:999}
</style>
<header id="top">
			<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
							
									<?php if(@$uid===null){
										echo "<div class='menu-hd'>
							亲，请<a href='../home/login.php' target='_top' class='h'>登录</a>
							免费<a href='../home/register.html' target='_top'>注册</a>
						</div>";
									}else{
										echo "您好  <a href='../person/index.php'>",$uid,"</a>"," <a href='../conmon/loginOut.php'> 退出登录</a>";
									
									}?>
							
							</div>
						</ul>
						<ul class="message-r">
							<div class="topMessage home">
								<div class="menu-hd"><a href="../home/home3.php" target="_top" class="h">商城首页</a></div>
							</div>
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="../person/index.php" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
							</div>
							<div class="topMessage mini-cart">
								<div class="menu-hd"><a id="mc-menu-hd" href="../home/mycart.php" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
							</div>
							<div class="topMessage favorite">
								<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
						</ul>
						</div>

						<!--悬浮搜索框-->

						<div class="nav white">
							<div class="logoBig">
								<li><img src="../images/logobig.png" /></li>
							</div>

							<div class="search-bar pr"style="position:relative;z-index: 1;">
								
								<form method="post" action="../home/search.php?id=1">
									<input id="searchInput" name="id" type="text" placeholder="搜索" autocomplete="off"value="">
									<input id="ai-topsearch" class="submit am-btn" value="搜索" type="submit">
									
								</form>
								
							</div>
							
						</div>

						<div class="clear"></div>
					</div>
				</div>
				<script>
				
				$("#ai-topsearch").click(function(){
					
					jQuery.ajax({
				
					url:"../conmon/searchSava.php",
					type:"POST",
					data:"sum="+$("#searchInput").val()+"",
					success:function(data){
					
							
							},
					error:function(){
						alert("错误");
						}
					
					})
				})
				
				
				</script>
			</article>
		</header>
