<?php 
session_start();
if(isset($_SESSION["username"]))echo "<a href='admin/cancellation.php' target=_parent style='font-weight: bolder;color: #F00;float: right;'>注销</a><span style='float: right;'>&nbsp;&nbsp;&nbsp;</span><a href='admin/user_management.php' target=new style='font-weight: bolder;color: #F00;float: right;'>欢迎{$_SESSION["username"]}</a>";
else echo "<a href='admin/register.php' target='new' style='font-weight: bolder;color: #F00;float: right;'>注册</a><span style='float: right;'>&nbsp;&nbsp;&nbsp;</span><a href='admin/login.php' target=new style='font-weight: bolder;color: #F00;float: right;'>登陆</a>";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>library</title>
</head>
<link href="css/library.css" rel="stylesheet" type="text/css">
<body>
<ul style=" float:left;">
    <li><a href="sort/programming_language.php" target="iframe_a">程序设计语言</a></li>
    <br/><br/>
    <li><a href="sort/front_end.php" target="iframe_a">前端技术</a></li>
    <br/><br/>
    <li><a href="sort/backstage_development.php" target="iframe_a">后台开发</a></li>
    <br/><br/>
    <li><a href="sort/network_technology.php" target="iframe_a">网络技术</a></li>
    <br/><br/>
    <li><a href="sort/operating_system.php" target="iframe_a">操作系统</a></li>
    <br/><br/>
    <li><a href="sort/3d_technology.php" target="iframe_a">3D技术</a></li>
    <br/><br/>
    <li><a href="sort/multimedia.php" target="iframe_a">多媒体</a></li>
    <br/><br/>
    <li><a href="sort/electronic_technology.php" target="iframe_a">电子信息技术</a></li>
    <br/><br/>
    <li><a href="sort/others.php" target="iframe_a">其他</a></li>
 </ul>
 <iframe name="iframe_a"></iframe>
</body>
</html>
