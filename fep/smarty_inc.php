<?php 
include_once('./smarty/Smarty.class.php');
$smarty = new Smarty(); 
$smarty->config_dir="smarty/Config_File.class.php";
$smarty->caching=flase;
$smarty->template_dir = "./templates"; //模板存放目录 
$smarty->compile_dir = "./templates_c"; //编译目录 
$smarty->cache_dir="./smarty_cache";
$smarty->left_delimiter = "<{"; //左定界符 
$smarty->right_delimiter = "}>"; //右定界符 


?>