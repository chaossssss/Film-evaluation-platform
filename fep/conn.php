<?php
$link=@mysql_connect("localhost","root","root");
if(!$link){ 
	echo "没连接上";
}
else{ 
	$con=mysql_select_db("fep");
	if(!$con){ 
		echo "没连接上fep";
	}
}

//include_once('./Smarty/Smarty.class.php');$smarty = new Smarty(); 
//$smarty -> template_dir = "./templates"; //模板存放目录 
//$smarty -> compile_dir = "./templates_c"; //编译目录 
//$smarty -> left_delimiter = "<{"; //左定界符 
//$smarty -> right_delimiter = "}>"; //右定界符 
?>