<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人信息</title>
<style type="text/css">
p {
	width: 300px;
	text-align: left;
	margin-top: 50px;
	margin-right: auto;
	margin-bottom: 50px;
	margin-left: auto;
}
</style>
</head>

<body>
<?php 
session_start();
if(isset($_SESSION["username"])){
    include 'conn.php';
    $sql="select * from user_information where username='".$_SESSION["username"]."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    echo "<p>用户名：$row[username]</p>";
    echo "<p>电话/手机号：$row[telephone]</p>";
    echo "<p>邮箱：$row[email]</p>";
    echo "<p>地址：$row[address]</p>";
}

?>
</body>
</html>
