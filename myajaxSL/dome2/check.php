<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include("conn.php");
	$userName=$_POST['userName'];
	$rs=mysql_query("select * from users where userName='$userName'");
	$num=mysql_num_rows($rs);
	if($num>0){
		echo '{"msg":"success","flag":"1"}'; 
		}else{
		echo '{"msg":"success","flag":"0"}'; 	
			}
}else{
	echo '{"msg":"error","flag":"0"}';
}
?>