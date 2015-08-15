<?php header('Content-type:text/html;charset=utf-8');
$configname="config/config_".$_GET['domain'].".php";
include $configname ;
$title=$_GET['title'] ;
$conn = @ mysql_connect($sql_host,$sql_username, $sql_password) ; //链接数据库，替换成自己的
mysql_select_db($sql_dbname, $conn); //选择弹幕列表所存放数据库，替换成自己的
mysql_query("set names 'utf8'");
$query = mysql_query("SELECT danmu FROM `$sql_table` WHERE title='$title'");
//echo $danmu;
echo "[";   //数组的前中括号
$first=0; 
while($row=mysql_fetch_array($query)){ 
if ($first) { 
echo ",";        //数组元素分隔符逗号，条件判断，数组前一个元素前不用逗号
} 
$first=1; 
echo "'".$row['danmu']."'";  //danmu对象（数据库里该字段每条记录都是一个text形式的弹幕对象）
} 
echo "]";  //数组的后中括号

?> 