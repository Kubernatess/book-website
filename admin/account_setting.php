<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>account_setting</title>
</head>
<link href="../css/account_setting.css" rel="stylesheet" type="text/css">

<body>
<form action="information_modify.php" method="GET" validate>
<?php 
session_start();
if(isset($_SESSION["username"])){ 
include 'conn.php';
$sql="select * from user_information where username='".$_SESSION["username"]."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo "<p>电话/手机号*</p><input type='text' name='telephone' placeholder=$row[telephone] ><br/>";
echo "<p>邮箱*</p><input type='email' name='email' placeholder=$row[email] ><br/>";
echo "<p>地址*</p><textarea name='address' style='width:100%;' cols=250 rows=5 placeholder=$row[address]></textarea><br/>";
echo "<input type=submit value='保存'>";
}
?>
</form>
</body>
</html>
