<?php
include("conn.php");
include("smarty_inc.php");
include("gb_write.php");
include("gb_function.php");

if(isset($_GET['Fname'])){ 
	$Fname=$_GET['Fname'];
	$sql="select * from film1 where Fname='$Fname'";
	$res=mysql_query($sql);
	$row = mysql_fetch_array($res);
}


$sql_gblist="select * from gb where Fname='$_GET[Fname]'";
$result_gb=mysql_query($sql_gblist);
while($row_gb=mysql_fetch_array($result_gb)){ 
	$page_list[]=array("username"=>$row_gb[username],"content"=>$row_gb[gbook]);
}
$smarty->assign("gblist",$page_list);

/*
$sql_gblist="select * from gb";
$pagesize=5;
$fpage="jianjie.php";
$numpage=pagedeal($sql_gblist,$pagesize);


$smarty->assign("recordcount",$recordcount);
$smarty->assign("page",$page);
$smarty->assign("pagecount",$pagecount);
$smarty->assign("prepage",$page-1);
$smarty->assign("nexpage",$page+1);
$smarty->assign("numpage",$numpage);
$smarty->assign("fpage",$fpage);


$rs=mysql_query("select *from gb limit $startloc,$pagesize");
$num=0;
while($row=mysql_fetch_array($rs)){ 
	$rss[$num]=array("gb_name"=>row["username"],"gb_book"=>row["gb_book"]);
	$num++;
}
$smarty->assign("rss",$rss);

*/



$smarty->assign("Fname",$row[Fname]);
$smarty->assign("Fint",$row[Fint]);
$smarty->assign("Fpic",$row[Fpic]);
$smarty->assign("Fact",$row[Fact]);
$smarty->assign("Fcla",$row[Fcla]);
$smarty->assign("Feva",$row[Feva]);
$smarty->display("jianjie.html");
?>