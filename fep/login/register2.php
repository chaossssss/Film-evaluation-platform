<?php
include ("conn.php");
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	$sql="INSERT INTO user (username,password,email)values('$_POST[user]','$_POST[pass]','$_POST[email]')";
	$result=mysql_query($sql);
	if(!$result){ 
		echo "注册不成功";
		echo "<a href='login.html'>返回</a>";
	}
?>


 <script>
 		function CheckPost(){ 
 			if (myform.user.value==""){ 
 				alert("请填写用户");
 				myform.user.focus();
 				return false;
 			}
 			if (myform.pass.value!=myform.repass.value)
 				{ 
 					alert("两次输入的密码不一致，请重新输入！");
 					myform.title.focus();
 					return false;
 				}
 		}
 </script>




<link rel="stylesheet" type="text/css" href="login.css">
<section class="register">
	<div class="titulo"></div>
	<form action="register.php" method="post" name="myform" onsubmit="return CheckPost();">
    	<input type="text" placeholder="输入用户名" class="formtop" name="user">
        <input type="password" placeholder="输入密码" class="formmiddle" name="pass">
        <input type="password" placeholder="确认密码" class="formmiddle" name="repass">
        <input type="text" placeholder="输入邮箱" class="formbottom" name="email">
        <div class="olvido">
<!--        	<div class="col"><a href="#">注册</a></div>-->
<!--            <div class="col"><a href="#" title="Recuperar Password">Fotgot Password?</a></div>-->
        </div>
<!--        <a href="#" class="enviar">注册</a>-->
		<input type="submit" name="register" value="注册" class="enviar">
    </form>
</section>