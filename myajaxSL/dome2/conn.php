<?php
//php连接数据库服务器
$conn=@mysql_connect("localhost","root","") or die("db connect error");
//切换数据库
mysql_select_db("bookmanage",$conn);
//设置字符集
mysql_query("set names utf8");
?>