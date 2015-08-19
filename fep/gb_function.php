<?php
/*function pagedeal($pagesql,$pagesize){ 
	global $recordocunt,$pagecount,$page,$startloc;
	$rs=mysql_query($pagesql);
	$recordocunt=mysql_num_rows($rs);
}
if($recordocunt%$pagesize==0)
	$pagecount=$recordocunt/$pagesize;
else
	$pagecount=intval($recordocunt/$pagesize)+1;
if(empty($page)||$page<1)
	$page=1;
if($page>$pagecount)
	$page=$pagecount;
$startloc=($page-1)*$pagesize;
if($page<=5);
$i=0;
if($page>5 && $pagecount-$page<5 && $pagecount>10)
	$i=$pagecount-10;
if($page>5 && $pagecount-$page>=5)
	$i=$page-5;
for(;$i<$page;$i++)
	$numpage[$i]=$i+1;
return $numpage;*/
?>