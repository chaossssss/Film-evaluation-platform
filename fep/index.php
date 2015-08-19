<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>看来看趣</title>
	<link rel="shortcut icon" type="image/x-icon" href="article/css/images/favicon.ico" />
	<link rel="stylesheet" href="article/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="article/css/colorbox.css" type="text/css" media="all" />
	
	<script src="article/js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="article/js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script type="text/javascript">
    jQuery.noConflict();
	jQuery(document).ready(function($){
		$(".guidelist li").hover(
			function () {
				$(this).attr("class", "mouseon");
			  },
			  function () {
				$(this).attr("class", "mouseout");
			  }
		);
		$(".ftoollist li").mouseover(function(){
			$(this).siblings().removeClass("on");
			$(this).addClass("on");
			var preNumber=$(this).prevAll().size();
			$(".fimglist li").removeClass("onpre");
			$(".fimglist li:nth-child("+preNumber+")").addClass("onpre");
			var margin = 662;
			margin = margin *preNumber; 
			margin = margin * -1;
			$(".fimglist").stop().animate({marginLeft: margin + "px"}, {duration: 500});
		});
	});
</script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="article/js/functions.js" type="text/javascript"></script>
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
						<a href="#" class="facebook-ico">facebook-ico</a>
						<a href="#" class="twitter-ico">twitter-ico</a>
						<a href="#" class="you-tube-ico">you-tube-ico</a>
					</div>
					<!-- end of socials -->
					<h1 id="logo"><a href="#">Moviereviews</a></h1>
					<!-- navigation -->
					<nav id="navigation">
						<ul>
							<li><a href="article/list.php">展示全部</a></li>
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
						<!-- post -->
						<!--幻灯片开始-->
<div class="focus">
    <div class="focusbox">         
        <div class="focusimg">
        <ul class="fimglist clearfix">
            <li><a href="#"><img src="article/css/images/0011.jpg" title="谍影重重" alt="谍影重重"></a></li>
            <li><a href="#"><img src="article/css/images/0021.jpg" title="美国队长" alt="美国队长"></a></li>
            <li><a href="#"><img src="article/css/images/0031.jpg" title="动物乌托邦" alt="动物乌托邦"></a></li>
            <li><a href="#"><img src="article/css/images/0041.jpg" title="超人大战蝙蝠侠" alt="超人大战蝙蝠侠"></a></li>
            <li><a href="#"><img src="article/css/images/0051.jpg" title="星际穿越" alt="星际穿越"></a></li>
            <li><a href="#"><img src="article/css/images/0061.jpg" title="蝙蝠侠" alt="蝙蝠侠"></a></li>
            <li><a href="#"><img src="article/css/images/0071.jpg" title="魔兽世界" alt="魔兽世界"></a></li>
        </ul>
        </div> 
        <div class="focustool">
        <ul class="ftoollist clearfix"><!--通过控制该ul的left值来实现列表的左右移动，增量为931px-->
            <li class="on" style="margin:0px -3px 0px 4px;"><a href="#"><img src="article/css/images/0012.jpg"><p class="imgname">谍影重重</p><p class="imgshortcat">教科书式的悬疑</p></a></li><!--当前项时为该li添加class: on-->
            <li><a href="#"><img src="article/css/images/0022.jpg"><p class="imgname">美国队长</p><p class="imgshortcat">复联分裂</p></a></li>
            <li><a href="#"><img src="article/css/images/0032.jpg"><p class="imgname">动物乌托邦</p><p class="imgshortcat">欢喜冤家</p></a></li>
            <li><a href="#"><img src="article/css/images/0042.jpg"><p class="imgname">超人大战蝙蝠侠</p><p class="imgshortcat">正义黎明</p></a></li>
            <li><a href="#"><img src="article/css/images/0052.jpg"><p class="imgname">星际穿越</p><p class="imgshortcat">虫洞旅行</p></a></li>
            <li><a href="#"><img src="article/css/images/0062.jpg"><p class="imgname">蝙蝠侠</p><p class="imgshortcat">黑暗骑士</p></a></li>
            <li><a href="#"><img src="article/css/images/0072.jpg"><p class="imgname">魔兽世界</p><p class="imgshortcat">纯正血统电影</p></a></li>
        </ul>
        </div>
        <a href="javascript://" class="btn_pre" target="_self" style="display:none">上一页</a>
        <a href="javascript://" class="btn_next" target="_self" style="display:none">下一页</a>
    </div>
</div>


						<!--幻灯片结束-->
						<!-- post -->
						<div class="post">
							<!-- post-inner -->
							<div class="post-inner">
								<header>
									<h2><a href="#">超能查派</a></h2>
									<p class="tags"><a href="#">惊悚</a> <a href="#">动作</a> <a href="#">科幻</a> </p>
									<div class="cl">&nbsp;</div>
								</header>
								<div class="img-holder">
									<a href="#"><img src="article/css/images/post-img2.jpg" alt="" /></a>
									<a href="css/images/post-img2.jpg" class="btn-full-image popup"><span>FULL IMAGE</span></a>
								</div>
								
								<!-- meta -->
								<div class="meta">
									<p class="date">APRIL 09, 2015 by <a href="#">chao</a></p>
									<div class="right">
										<div class="rating-holder">
											<p>等级</p>
											<div class="rating">
												<span style="width: 50%;"></span>
											</div>
										</div>
										<a href="#" class="comments">59 条评论</a>
									</div>
									<div class="cl">&nbsp;</div>
								</div>
								<!-- end of meta -->
								<!-- post-cnt -->
								<div class="post-cnt">
									<p>　　在不久以后的未来，米歇尔·布莱德利的大型军火公司，制造出了全球第一批机器人警察，并派遣它们执行任务。程序员迪恩（戴夫·帕特尔 Dev Patel 饰）是机器人警察的制造者之一。但他在工作之余，还有自己执着追寻的梦想：人类进化的下一步，“能思考，有感觉”的机器。 
									迪恩向米歇尔·布莱德利寻求支持未果，转而利用公司的设备自行开始制造和实验，并成功地将拥有人工智能的机器人“查派”带到了这个世界。查派性格天真可爱，像个孩子一样不断学习，然而能够语言，能够思想，能够作画的机器人，引发了米歇尔·布莱德利，以及文森特的恐慌，文森特驾驶机器战士找到迪恩，意欲除掉机器人查派，人类与机器之间的大战再度爆发……</p>
									<a href="#" class="more">CONTINUE READING</a>
								</div>
								<!-- end of post-cnt -->
							</div>
							<!-- post-inner -->
						</div>
						<!-- end of post -->
						<!-- post -->
						<div class="post">
							<!-- post-inner -->
							<div class="post-inner">
								<header>
									<h2><a href="#">明日世界</a></h2>
									<p class="tags"><a href="#">动作</a> <a href="#">科幻</a> <a href="#">冒险</a> </p>
									<div class="cl">&nbsp;</div>
								</header>
								<div class="img-holder">
									<a href="#"><img src="article/css/images/post-img3.jpg" alt="" /></a>
									<a href="css/images/post-img3.jpg" class="btn-full-image popup"><span>FULL IMAGE</span></a>
								</div>
								
								<!-- meta -->
								<div class="meta">
									<p class="date">APRIL 09, 2015 by <a href="#">chao</a></p>
									<div class="right">
										<div class="rating-holder">
											<p>等级</p>
											<div class="rating">
												<span style="width: 70%;"></span>
											</div>
										</div>
										<a href="#" class="comments">59 条评论</a>
									</div>
									<div class="cl">&nbsp;</div>
								</div>
								<!-- end of meta -->
								<!-- post-cnt -->
								<div class="post-cnt">
									<p>　　二十世纪初，爱迪生、巴黎铁塔总设计师埃菲尔、“交流电之父”尼古拉·特斯拉和其他顶尖的科学家、艺术家组成了一个秘密团体，共同打造一个理想计划——明日世界，传言中，华特·迪士尼也是创办人之一，在他的遗物中有一个黑盒子，装着神秘的机关。可是这个计划却出了意外，“明日世界”也从此消失。 
									　　在不久以后的未来，米歇尔·布莱德利的大型军火公司，制造出了全球第一批机器人警察，并派遣它们执行任务。程序员迪恩弗兰克少年时曾亲眼目睹“明日世界”，但意外之后便过着半隐居的生活，直到聪明的少女凯茜找上门，凯茜对科学和生命都充满热情，在无意间发现了神秘的徽章，她需要弗兰克的协助，破解零星线索，找到隐藏在神秘时空里的“明日世界”，以改变人类的命运……</p>
									<a href="#" class="more">CONTINUE READING</a>
								</div>
								<!-- end of post-cnt -->
							</div>
							<!-- post-inner -->
						</div>
						<!-- end of post -->
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
					</section>
					<!-- end of content -->
					<!-- sidebar -->
					<aside class="sidebar">
						<div style="" class="box">
							<div class="login" style="float:left; text-align:center;"><a href="login/login.html" onclick="">登录</a></div>
							<div class="login" style="float:left; text-align:center;"><a href="login/register.php">注册</a></div>
						</div>
						<div class="widget">
							<h3 class="widgettitle">分类</h3>
							<ul>
								<li><a href="article/listtj.php?Fcla=动作">动作</a></li>
								<li><a href="article/listtj.php?Fcla=喜剧">喜剧</a></li>
								<li><a href="article/listtj.php?Fcla=家庭">家庭</a></li>
								<li><a href="article/listtj.php?Fcla=历史">历史</a></li>
								<li><a href="article/listtj.php?Fcla=悬疑">悬疑</a></li>
								<li><a href="article/listtj.php?Fcla=科幻">科幻</a></li>
								<li><a href="article/listtj.php?Fcla=战争">战争</a></li>
								<li><a href="article/listtj.php?Fcla=西方">西方</a></li>
								<li><a href="article/listtj.php?Fcla=冒险">冒险</a></li>
								<li><a href="article/listtj.php?Fcla=犯罪">犯罪</a></li>
								<li><a href="article/listtj.php?Fcla=奇幻">奇幻</a></li>
								<li><a href="article/listtj.php?Fcla=恐怖">恐怖</a></li>
								<li><a href="article/listtj.php?Fcla=惊悚">惊悚</a></li>
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
								<li><a href="#" class="facebook-ico"><span></span>新浪微博</a></li>
								<li><a href="#" class="twitter-ico"><span></span>腾讯微博</a></li>
								<li><a href="#" class="linkedin-ico"><span></span>QQ空间</a></li>
								<li><a href="#" class="you-tube-ico"><span></span>微信</a></li>
								<li><a href="#" class="rss-ico"><span></span>百度贴吧</a></li>
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
							<li><a href="article/list.php">展示全部</a></li>
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