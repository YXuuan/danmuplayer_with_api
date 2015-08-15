<?php header('Content-type:text/html;charset=utf8');
$configname="config/config_".$_GET['domain'].".php";
echo $configname ;
include $configname ;
$title=$_GET['title'] ;
$conn = @ mysql_connect($sql_host,$sql_username, $sql_password) ; //链接数据库，替换成自己的
mysql_select_db($sql_dbname, $conn); //选择弹幕列表所存放数据库，替换成自己的
mysql_query("set names 'utf8'");
$danmu=$_POST['danmu']; 
//接受弹幕参数，接受参数后请做SQL防注入过滤。
$sql="INSERT INTO `$sql_table` (title,danmu) VALUES ('$title','$danmu')";
$query=mysql_query($sql);
//在这里弹幕所存放的数据表名称为danmu，该表有一个text型字段，字段名名也为danmu。另外还有一个索引字段（重要）。
echo $danmu; 

//注意，在大型的应用程序中，为了防止恶意刷弹幕，需进行单个IP或用户的次数限制等操作。
?>
