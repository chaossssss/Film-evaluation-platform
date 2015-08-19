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
?>