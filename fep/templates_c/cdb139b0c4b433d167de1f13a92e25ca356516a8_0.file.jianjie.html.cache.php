<?php /* Smarty version 3.1.27, created on 2015-08-09 03:42:55
         compiled from "D:\xampps\htdocs\fep\templates\jianjie.html" */ ?>
<?php
/*%%SmartyHeaderCode:2138555c6cc3f223076_94295902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb139b0c4b433d167de1f13a92e25ca356516a8' => 
    array (
      0 => 'D:\\xampps\\htdocs\\fep\\templates\\jianjie.html',
      1 => 1439091772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138555c6cc3f223076_94295902',
  'variables' => 
  array (
    'Fname' => 0,
    'Feva' => 0,
    'Fpic' => 0,
    'Fact' => 0,
    'Fcla' => 0,
    'Fint' => 0,
    'gblist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c6cc3f307b21_42584790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c6cc3f307b21_42584790')) {
function content_55c6cc3f307b21_42584790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2138555c6cc3f223076_94295902';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>看来看趣</title>
	<link rel="shortcut icon" type="image/x-icon" href="/css/images/favicon.ico" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/colorbox.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/normalize.css">	
	<?php echo '<script'; ?>
 src="/js/jquery-1.8.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/jquery.colorbox-min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="js/modernizr.custom.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="/js/functions.js" type="text/javascript"><?php echo '</script'; ?>
>

<style type="text/css">
	
	.webdesigntuts-workshop form {
	background: #111;
	background: -webkit-linear-gradient(#1b1b1b, #111);
	background: -moz-linear-gradient(#1b1b1b, #111);
	background: -o-linear-gradient(#1b1b1b, #111);
	background: -ms-linear-gradient(#1b1b1b, #111);
	background: linear-gradient(#1b1b1b, #111);
	border: 1px solid #000;
	border-radius: 5px;
	box-shadow: inset 0 0 0 1px #272727;
	display: inline-block;
	font-size: 0px;
	margin: 0 0 10px 20px;
	padding: 10px;
	position: relative;
	z-index: 1;
}

.webdesigntuts-workshop input {
	background: #222;
	background: -webkit-linear-gradient(#333, #222);	
	background: -moz-linear-gradient(#333, #222);	
	background: -o-linear-gradient(#333, #222);	
	background: -ms-linear-gradient(#333, #222);	
	background: linear-gradient(#333, #222);	
	border: 1px solid #444;
	border-radius: 5px 0 0 5px;
	box-shadow: 0 2px 0 #000;
	color: #888;
	display: block;
	float: left;
	font-family: 'Cabin', helvetica, arial, sans-serif;
	font-size: 13px;
	font-weight: 400;
	height: 30px;
	margin: 0;
	padding: 0 10px;
	text-shadow: 0 -1px 0 #000;
	width: 200px;
}

.ie .webdesigntuts-workshop input {
	line-height: 30px;
}

.webdesigntuts-workshop input::-webkit-input-placeholder {
   color: #888;
}

.webdesigntuts-workshop input:-moz-placeholder {
   color: #888;
}

.webdesigntuts-workshop input:focus {
	-webkit-animation: glow 800ms ease-out infinite alternate;
	-moz-animation: glow 800ms ease-out infinite alternate;
	-o-animation: glow 800ms ease-out infinite alternate;
	-ms-animation: glow 800ms ease-out infinite alternate;
	animation: glow 800ms ease-out infinite alternate;
	background: #222922;
	background: -webkit-linear-gradient(#333933, #222922);
	background: -moz-linear-gradient(#333933, #222922);
	background: -o-linear-gradient(#333933, #222922);
	background: -ms-linear-gradient(#333933, #222922);
	background: linear-gradient(#333933, #222922);
	border-color: #393;
	box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
	color: #efe;
	outline: none;
}

.webdesigntuts-workshop input:focus::-webkit-input-placeholder { 
	color: #efe;
}

.webdesigntuts-workshop input:focus:-moz-placeholder {
	color: #efe;
}

.webdesigntuts-workshop #search {
	background: #222;
	background: -webkit-linear-gradient(#333, #222);
	background: -moz-linear-gradient(#333, #222);
	background: -o-linear-gradient(#333, #222);
	background: -ms-linear-gradient(#333, #222);
	background: linear-gradient(#333, #222);
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	-o-box-sizing: content-box;
	-ms-box-sizing: content-box;
	box-sizing: content-box;
	border: 1px solid #444;
	border-left-color: #000;
	border-radius: 0 5px 5px 0;
	box-shadow: 0 2px 0 #000;
	color: #fff;
	display: block;
	float: left;
	font-family: 'Cabin', helvetica, arial, sans-serif;
	font-size: 13px;
	font-weight: 400;
	height: 30px;
	line-height: 30px;
	margin: 0;
	padding: 0;
	position: relative;
	text-shadow: 0 -1px 0 #000;
	width: 80px;
}	

.webdesigntuts-workshop #search:hover,
.webdesigntuts-workshop #search:focus {
	background: #292929;
	background: -webkit-linear-gradient(#393939, #292929);	
	background: -moz-linear-gradient(#393939, #292929);	
	background: -o-linear-gradient(#393939, #292929);	
	background: -ms-linear-gradient(#393939, #292929);	
	background: linear-gradient(#393939, #292929);
	color: #5f5;
	outline: none;
}

.webdesigntuts-workshop #search:active {
	background: #292929;
	background: -webkit-linear-gradient(#393939, #292929);
	background: -moz-linear-gradient(#393939, #292929);
	background: -o-linear-gradient(#393939, #292929);
	background: -ms-linear-gradient(#393939, #292929);
	background: linear-gradient(#393939, #292929);
	box-shadow: 0 1px 0 #000, inset 1px 0 1px #222;
	top: 1px;
}

@-webkit-keyframes glow {
    0% {
		border-color: #393;
		box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
    }	
    100% {
		border-color: #6f6;
		box-shadow: 0 0 20px rgba(0,255,0,.6), inset 0 0 10px rgba(0,255,0,.4), 0 2px 0 #000;
    }
}

@-moz-keyframes glow {
    0% {
		border-color: #393;
		box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
    }	
    100% {
		border-color: #6f6;
		box-shadow: 0 0 20px rgba(0,255,0,.6), inset 0 0 10px rgba(0,255,0,.4), 0 2px 0 #000;
    }
}

@-o-keyframes glow {
    0% {
		border-color: #393;
		box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
    }	
    100% {
		border-color: #6f6;
		box-shadow: 0 0 20px rgba(0,255,0,.6), inset 0 0 10px rgba(0,255,0,.4), 0 2px 0 #000;
    }
}

@-ms-keyframes glow {
    0% {
		border-color: #393;
		box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
    }	
    100% {
		border-color: #6f6;
		box-shadow: 0 0 20px rgba(0,255,0,.6), inset 0 0 10px rgba(0,255,0,.4), 0 2px 0 #000;
    }
}

@keyframes glow {
    0% {
		border-color: #393;
		box-shadow: 0 0 5px rgba(0,255,0,.2), inset 0 0 5px rgba(0,255,0,.1), 0 2px 0 #000;
    }	
    100% {
		border-color: #6f6;
		box-shadow: 0 0 20px rgba(0,255,0,.6), inset 0 0 10px rgba(0,255,0,.4), 0 2px 0 #000;
    }
}
</style>



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
					<!--搜索框开始-->
					<!--搜索框结束-->
						<!-- post -->
						<!--简介开始-->
						<div id="content">
							<h1 style="font-size: 25px; font-weight: bold; padding: 0 0 15px 0; "><?php echo $_smarty_tpl->tpl_vars['Fname']->value;?>

								<!--<span><?php echo $_smarty_tpl->tpl_vars['Feva']->value;?>
</span>-->
							</h1>
							<div class="article" style="float: left; width: 672px; display: block;">
								<div class="indent clearfix" >
									<div class="subjectwrap clearfix">
										<div class="subject clearfix">
											<div id="mainpic" style="max-width: 270px; float: left; padding: 0 10px 0 0; ">
												<img src="<?php echo $_smarty_tpl->tpl_vars['Fpic']->value;?>
" class="pic" style=" width: 270px; height: 405px; ">
											</div>
											<div id="info" style=" float: left; display: inline; width: 392px;">
												<span>
													<span class="word" style=" font-size: 12px; word-wrap: break-word; "> <?php echo $_smarty_tpl->tpl_vars['Fact']->value;?>
</span>
													<hr class="spx" style=" width: 390px; border-style: dotted; margin: 8px 0 8px 0;">
													<span class="word" style=" font-size: 12px; word-wrap: break-word; "> 分类：<?php echo $_smarty_tpl->tpl_vars['Fcla']->value;?>
</span>
													<hr class="spx" style=" width: 390px; border-style: dotted; margin: 8px 0 8px 0;">
													<span class="word" style=" font-size: 12px; word-wrap: break-word; "> 剧情简介：<?php echo $_smarty_tpl->tpl_vars['Fint']->value;?>
</span>
													<hr class="spx" style=" width: 390px; border-style: dotted; margin: 8px 0 8px 0;">
													<span class="word" style=" font-size: 12px; word-wrap: break-word; "> 评分：<?php echo $_smarty_tpl->tpl_vars['Feva']->value;?>
</span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<!--评价栏开始-->

								

								<form action="" method="post" style=" margin:500px 0 0 0;" >
									<p style="font-size:20px;">评价栏</p>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gblist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>	
								<div style="border: 1px #ccc solid; font-size:12px;">用户：<?php echo $_smarty_tpl->tpl_vars['gblist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['username'];?>
 &nbsp|&nbsp  评价：<?php echo $_smarty_tpl->tpl_vars['gblist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['content'];?>
</div>
								
								<?php endfor; endif; ?>	
									<textarea cols="109" rows="10" name="content" style="border-radius: 4px;margin:15px 0 0 0;"></textarea>
									<input type="submit" class="gb_buttom" style=" float:right; background: #fff; border: 1px solid #ccc; padding: 10px 25px 10px 25px; color: #333; border-radius: 4px;" value="发布评价">
								</form>
								<!--评价栏结束-->
							</div>


						</div>



						<!--简介结束-->
						<!-- end of post -->
<!--						<div class="pagination">
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
						</div>-->
					</section>
					<!-- end of content -->
					<!-- sidebar -->
					<aside class="sidebar">
						<div class="widget" >
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
</html><?php }
}
?>