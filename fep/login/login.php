<link rel="stylesheet" type="text/css" href="login.css">
<script type="text/javascript">

</script>
<section class="login">
	<div class="titulo"></div>
	<form action="login.php" method="post">
    	<input type="text" placeholder="输入用户名" name="username">
        <input type="password" placeholder="输入密码" name="password">
        <div class="olvido">
        	<div class="col"><a href="register.php">注册</a></div>
 <!--           <div class="col"><a href="#" title="Recuperar Password">Fotgot Password?</a></div>-->
		
 <?php
require_once ("conn.php"); 
$username=$_POST["username"];
$password=$_POST["password"];

	if($_GET[out]){ 
		setcookie('id','');
		setcookie('pass','');
		//echo "<script>location.href='list.php'</script>";
	}

	if($_POST[username]&&$_POST[password]){ 
		setcookie('id',$_POST[username],time()+3600,'/');
		setcookie('pass',$_POST[password],time()+3600,'/');

		//echo "<script>location.href='../article/list.php'</script>";
	}

	/*if($_COOKIE[id]&&$_COOKIE[pass]){ 

		echo "登录成功<br>";
		echo "用户名".$_COOKIE[id]."密码".$_COOKIE[pass];
		//echo "<a href='list.php?out=out'>退出</a>";
	}*/


if(!isset($username)||!isset($password)){ 
	echo "<div class=\"col\">没有用户名或密码</div>";
}
else{ 
	$sql="select * from user where username='$username'";
	$result=mysql_query($sql);
	if(!$result){ 
		echo "<div class=\"col\">没有此人</div>";
	}
	else{ 
		$row=mysql_fetch_array($result);
		if($password!=$row[password]){ 
			echo "<div class=\"col\">密码错误</div>";
		}
		else{ 
			//echo "<div class=\"col\">登录成功</div>";
			//sleep(2);
			header("refresh:2;url=../article/listlogin.php");
			print('<div class="col">正在加载,请稍等...</div>');
			//header("Location:../article/list.php");
			//print('<div class="col">登录成功...<br>两秒后自动跳转</div>');
			//echo "<script language=\"javascript\">登录成功(\"window.location.href=\"../article/list.php\"\",2000)</script>";
		}
	}
}

?>


		</div>

<!--        <a href="#" class="enviar">登录</a>-->
		
        	<input type="submit" name="login" value="登录" class="enviar">
    </form>
</section>




