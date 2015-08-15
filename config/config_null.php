<?php
//MySQL设置
    $sql_host="559e80576088d.gz.cdb.myqcloud.com:10844" ; //MySQL数据库地址
    $sql_username="root" ;  //MySQL数据库用户名
    $sql_password="cdb106392" ;  //MySQL数据库密码
    $sql_dbname="shutdown-s" ; //MySQL数据库名
    $sql_table="danmuplayer01" ; //储存弹幕的表名称 如果一个表数据过多请新建一个表并在这里修改
//弹幕设置
    $speed="20000" ; //弹幕速度，穿过视频的毫秒数 默认值：15000
    $default_font_color="#FFFFFF" ;    //默认的弹幕颜色 默认值：#FFFFFF
    $font_size_small="16" ;   //小号弹幕的字体大小,注意此属性值只能是整数 默认值：16
    $font_size_big="28" ; //大号弹幕的字体大小 默认值：28
/*
首次运行时执行当前目录下的sql.sql语句
（创建一个表 danmuplayer01可以更改 创建新表时使用 并更改上面$sql_table的值）
*/
?>