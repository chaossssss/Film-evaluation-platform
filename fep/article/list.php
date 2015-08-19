<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>看来看趣</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/normalize.css">
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/changdiv.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<div class="light-bg">
			<!-- shell -->
			<div class="shell">
				<!-- header -->
				<div class="header">
					<!-- socials -->
					<div class="socials">
						<a href="#" class="xinlangweibo-ico">xinlangweibo-ico</a>
						<a href="#" class="tengxunweibo-ico">tengxunweibo-ico</a>
						<a href="#" class="weixine-ico">weixin-ico</a>
					</div>
					<!-- end of socials -->
					<h1 id="logo"><a href="#">Moviereviews</a></h1>
					<!-- navigation -->
					<nav id="navigation">
						<ul>
							<li><a href="list.php">展示全部</a></li>
							<li><a href="#">最新电影 <span>20</span></a></li>
							<li><a href="#">评价最高的</a></li>
							<li><a href="#">大多数评论</a></li>
						</ul>
					</nav>
					<!-- end of navigation -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of header -->
				<!-- main -->
				<div class="main">
					<!-- content -->
					<section class="content">
					<!--搜索框开始-->
<?php
include("conn.php");
if($_GET[key]){ 
	$sql="select * from film1 where Fname like '%$_GET[key]%'";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) {
		//$row[Fname]=preg_replace("/($_GET[key])/i", "<font color=red><b>\\1<b></font>", $row[Fname]);
		echo "<a href=../jianjie.php?Fname=$row[Fname]>".$row[Fname]."</a><br>";
	}
}
?>
					<div class="webdesigntuts-workshop">
						<form action="" method="get">
							<input type="text" name="key" id="" placeholder="What are you looking for?">
							<input type="submit" name="sub" value="搜索" id="search">
						</form>
					</div>
					<!--搜索框结束-->
						<!-- post -->
						<!--列表开始-->
						<?php
						include("conn.php");
						$page = $_GET["page"]; 
						function Page($rows,$page_size){ 
							global $page,$select_from,$select_limit,$pagenav; 
							$page_count = ceil($rows/$page_size); 
							if($page <= 1 || $page == '') $page = 1; 
							if($page >= $page_count) $page = $page_count; 
							$select_limit = $page_size; 
							$select_from = ($page - 1) * $page_size.','; 
							$pre_page = ($page == 1)? 1 : $page - 1; 
							$next_page= ($page == $page_count)? $page_count : $page + 1 ; 
							$pagenav .= "第 $page/$page_count 页 共 $rows 条记录 "; 
							$pagenav .= "<a href='?page=1'>首页</a> "; 
							$pagenav .= "<a href='?page=$pre_page'>前一页</a> "; 
							$pagenav .= "<a href='?page=$next_page'>后一页</a> "; 
							$pagenav .= "<a href='?page=$page_count'>末页</a>"; 
							$pagenav.="　跳到<select name='topage' size='1' onchange='window.location=\"?page=\"+this.value'>\n"; 
							for($i=1;$i<=$page_count;$i++){ 
								if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n"; 
									else $pagenav.="<option value='$i'>$i</option>\n"; 
							} 
							$pagenav.="</select>";
						} // Page分页函数 
						// 使用示例 
				//	if (!$conn= @mysql_connect("localhost", "root" ,"root")) die('数据库选择失败！'); 
//if (!mysql_select_db("fep", $conn)) die('数据库选择失败！');  
// 用Page函数计算出 $select_from 从哪条记录开始检索、$pagenav 输出分页导航 
							$rows = mysql_num_rows(mysql_query("select * from film1")); 
							Page($rows,12); 
							$sql = "select * from film1 limit $select_from $select_limit"; 
							$rst = mysql_query($sql); 
							echo "<div class=\"list\">";
							while ($row = mysql_fetch_array($rst)){ 
								echo "<div style=\" height: 335px; width: 212px; float: left;\"><a class=\"item\" target=\"_parent\" href=\"../jianjie.php?Fname=$row[Fname]\">";
									echo "<div class=\"cover-wp\">";
										echo "<img src='../".$row['Fpic']."' alt='".$row[Fname]."'/>";
									echo "</div>";
									echo "<p>".$row[Fname]."&nbsp;&nbsp;".
									"<strong>".$row[Feva]."</strong>".
									"</p>";
									echo "</a></div>"; 
							} 
							
							echo "<div id='yemian' style=\"color:blue;width:636px;height=22px;float:left; \">".$pagenav."</div>";

							?>
						<!--分页结束-->
<!--
						<div class="list">
							<a class="item" target="_blank" href="">
								<div class="cover-wp">
									<img src="./image/20150001.jpg" alt="侏罗纪世界">
								</div>
								<p>
									侏罗纪世界
									<strong>7.9</strong>
								</p>
							</a>
							<a class="item" target="_blank" href="">
								<div class="cover-wp">
									<img src="./image/20150001.jpg" alt="侏罗纪世界">
								</div>
								<p>
									侏罗纪世界
									<strong>7.9</strong>
								</p>
							</a>
							<a class="item" target="_blank" href="">
								<div class="cover-wp">
									<img src="./image/20150001.jpg" alt="侏罗纪世界">
								</div>
								<p>
									侏罗纪世界
									<strong>7.9</strong>
								</p>
							</a>
							<a class="item" target="_blank" href="">
								<div class="cover-wp">
									<img src="./image/20150001.jpg" alt="侏罗纪世界">
								</div>
	
						</div>
-->
						
						
					
<!--						
						<div class="pagination">
							<ul>
								<li class="laquo"><a href="#"><span></span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="raquo"><a href="#"><span></span></a></li>
								<li><a href="#">10</a></li>
								<li class="dots">. . .</li>
								<li><a href="#">last</a></li>
							</ul>
						</div>
-->

		 			</section>
					<aside class="sidebar">
						<div style="" class="box">
							<div class="login" style="float:left; text-align:center;" id="login"><a href="../login/login.html" onclick="">登录</a></div>
							<div class="login" style="float:left; text-align:center;"><a href="../login/register.php">注册</a></div>
						</div>
						<div class="widget">
							<h3 class="widgettitle">分类</h3>
							<ul>
								<li><a href="listtj.php?Fcla=动作">动作</a></li>
								<li><a href="listtj.php?Fcla=喜剧">喜剧</a></li>
								<li><a href="listtj.php?Fcla=家庭">家庭</a></li>
								<li><a href="listtj.php?Fcla=历史">历史</a></li>
								<li><a href="listtj.php?Fcla=悬疑">悬疑</a></li>
								<li><a href="listtj.php?Fcla=科幻">科幻</a></li>
								<li><a href="listtj.php?Fcla=战争">战争</a></li>
								<li><a href="listtj.php?Fcla=西方">西方</a></li>
								<li><a href="listtj.php?Fcla=冒险">冒险</a></li>
								<li><a href="listtj.php?Fcla=犯罪">犯罪</a></li>
								<li><a href="listtj.php?Fcla=奇幻">奇幻</a></li>
								<li><a href="listtj.php?Fcla=恐怖">恐怖</a></li>
								<li><a href="listtj.php?Fcla=惊悚">惊悚</a></li>
							</ul>
						</div>

						<div class="widget">
							<h3 class="widgettitle">正在热映</h3>
							<ul>
								<li><a href="#">哆啦A梦：伴我同行 <strong>$98 Mil</strong></a></li>
								<li><a href="#">末日坍塌 <strong>$50 Mil</strong></a></li>
								<li><a href="#">明日世界 <strong>$23 Mil</strong></a></li>
								<li><a href="#">复仇者联盟2 <strong>$50 Mil</strong></a></li>
								<li><a href="#">我的个神啊  <strong>$7 Mil</strong></a></li>
							</ul>
						</div>

						<div class="widget socials-widget">
							<h3 class="widgettitle">分享至</h3>
							<ul>
								<li><a href="http://v.t.sina.com.cn/share/share.php?title=你好 说点什么吧" class="xinlangweibo-ico"><span></span>新浪微博</a></li>
								<li><a href="#" class="tengxunweibo-ico"><span></span>腾讯微博</a></li>
								<li><a href="javascript:void(0);" onclick="window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(document.location.href));return false;" class="kongjian-ico"><span></span>QQ空间</a></li>
								<li><a href="#" class="weixin-ico"><span></span>微信</a></li>
								<li><a href="#" class="tieba-ico" onclick="void(function(){var d=document,e=encodeURIComponent,u='http://tieba.baidu.com/f/commit/share/openShareApi?title=网盟开放平台_百度贴吧&url='+e(d.location.href),o=function(){if(!window.open(u))location.href=u};if(/Firefox/.test(navigator.userAgent)){setTimeout(o,0)}else{o()};return false;})();"><span></span>百度贴吧</a></li>
							</ul>
						</div>
					</aside>
					<!-- end of sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of main -->
				<div class="footer">
					<nav class="footer-nav">
						<ul>
							<li><a href="#">展示全部</a></li>
							<li><a href="#">最新电影</a></li>
							<li><a href="#">评价最高的</a></li>
							<li><a href="#">大多数评论</a></li>
						</ul>
					</nav>
					<p class="copy">Copyright &copy; 2015 <span>|</span> Sitename. Design by <a href="#" target="_blank">chao</a></p>
				</div>
			</div>
			<!-- end of shell -->
		</div>	
	</div>
	<!-- end of wrapper -->
</body>
</html>

