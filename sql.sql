/*创建一个名为danmuplayer01的表来储存弹幕 如果你觉得danmuplayer01表中的数据太多 可以把它改为danmyplayer02在运行
这样就创建了一个danmuplayer02的表 请手动更改config.php中$sql_table的值*/
CREATE TABLE `danmuplayer01` (
`title` varchar(255) NOT NULL,
`danmu` text NOT NULL,
KEY `title`(`title`)
) ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci