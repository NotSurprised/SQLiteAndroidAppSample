<?php
// 資料庫相關資料
$database_dblink = "httpPostTest";
$username_dblink = "root";
$password_dblink = "YOUR_ROOT_PASSWORD";

// 建立資料庫連線
$dblink = mysql_pconnect("localhost", $username_dblink, $password_dblink) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES utf8",$dblink); 
mysql_query("SET CHARACTER_SET_CLIENT=utf8",$dblink); 
mysql_query("SET CHARACTER_SET_RESULTS=utf8",$dblink); 
mysql_select_db($database_dblink, $dblink);

// 宣告utf-8的編碼
header("Content-Type:text/html; charset=utf-8");
// 接收POST/GET的資料
$data=@$_REQUEST['data'];

// 如果有資料
if (strcmp(trim($data), "")!=0)
{
// 將資料輸入進資料庫
$insertSQL = sprintf("INSERT INTO `weblog` (`data`) VALUES ('%s');", $data);
mysql_query($insertSQL, $dblink) or die(mysql_error());
}

// 從資料庫撈出來最後一筆資料
$query_rs = "SELECT * FROM `weblog` order by log_id desc limit 0,1";
$rs = mysql_query($query_rs, $dblink) or die(mysql_error());
$row = mysql_fetch_assoc($rs);
echo "data=".$row['data']."\n"."time=".$row['post_time'];
?>
CREATE TABLE IF NOT EXISTS `weblog` ( `log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', `data` varchar(255) NOT NULL COMMENT '傳入的資料', `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '發佈時間', PRIMARY KEY (`log_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='訊息記錄' AUTO_INCREMENT=1;