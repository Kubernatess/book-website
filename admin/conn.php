<?php
header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","");
if(!$conn){
	exit("数据库连接失败！");
	mysqli_error();
}
mysqli_set_charset($conn,"UTF8");
mysqli_select_db($conn,"library") or die("数据库选择失败！");
?>