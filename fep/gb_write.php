<?php
include("conn.php");

$username=$_COOKIE[id];
$Filmname=$_GET[Fname];
$content=$_POST[content];

//echo $username;
//echo $Filmname;
//echo $content;
if($username&&$content){
$sql_gb="INSERT INTO gb (username,Fname,gbook) values ('$username','$Filmname','$content')";
$result=mysql_query($sql_gb);
}
?>


<!--<form action="" method="post">
	评价栏
	<textarea cols="108" rows="10" name="content"></textarea>
	<input type="submit" style=" float:right; " value="发布评价">
</form>-->