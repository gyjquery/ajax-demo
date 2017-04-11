<?php
header("content-type:text/html;charset=utf-8");
include("conn.php");
$rs=mysql_query("select * from books");
$jsonbooks="[";
while($info=mysql_fetch_array($rs)){
	$jsonbooks.='{"bookId":'.'"'.$info["bookId"].'",'.'"bookName":'.'"'.$info['bookName'].'",'.'"bookOri":'.'"'.$info['bookOri'].'",'.'"bookPrice":'.'"'.$info['bookPrice'].'",'.'"bookPub":'.'"'.$info['bookPub'].'",'.'"bookPic":'.'"'.$info['bookPic'].'",'.'"bookAddTime":'.'"'.$info['bookAddTime'].'"},';
}
echo substr($jsonbooks,0,strlen($jsonbooks)-1)."]";
?>