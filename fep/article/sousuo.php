<?php
include("conn.php");
if($_GET[key]){ 
	$sql="select * from film1 where Fname like '%$_GET[key]%'";
	$result=mysql_query($sql);
	while ($row=mysql_fetch_array($result)) {
		$row[Fname]=preg_replace("/($_GET[key])/i", "<font color=red><b>\\1<b></font>", $row[Fname]);
		echo $row[Fname]."<br>";
	}
}
?>