<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("conn.php");
	$userName=$_POST['userName'];
	$pwd=$_POST['pwd'];
	$rs=mysql_query("select * from users where userName='$userName' and pwd='$pwd'");
	$num=mysql_num_rows($rs);
	if($num>0){
		echo '{"status":"ok","msg":"登陆成","userName":'.'"'.$userName.'"}';
		}else{
			echo '{"status":"error","msg":"登陆失败"}';
			}
}else{
   //
	}
?>