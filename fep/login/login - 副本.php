<link rel="stylesheet" type="text/css" href="login.css">
<section class="login">
	<div class="titulo"></div>
	<form action="login.php" method="post">
    	<input type="text" placeholder="输入用户名" name="username">
        <input type="password" placeholder="输入密码" name="password">
        <div class="olvido">
        	<div class="col"><a href="register.php">注册</a></div>
 <!--           <div class="col"><a href="#" title="Recuperar Password">Fotgot Password?</a></div>-->
		</div>

<!--        <a href="#" class="enviar">登录</a>-->
		
        	<input type="submit" name="login" value="登录" class="enviar">
    </form>
</section>



<?php
require_once ("conn.php"); 
$username=$_POST["username"];
$password=$_POST["password"];
if(!isset($username)||!isset($password)){ 
	echo "没有用户名或密码";
	exit();
}
else{ 
	$sql="select * from user where username='$username'";
	$result=mysql_query($sql);
	if(!$result){ 
		echo "没有此人";
		exit();
	}
	else{ 
		$row=mysql_fetch_array($result);
		if($password!=$row[password]){ 
			echo "密码错误";
		}
		else{ 
			echo "登录成功";
			exit();
		}
	}
}
?>
