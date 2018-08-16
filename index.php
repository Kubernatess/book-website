<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
</head>
<link href="css/index.css" rel="stylesheet" type="text/css">
<body>
<img style="float:left;" src="image/icon/bookstore.jpg" width="80" height="80">
<?php 
session_start();
if(isset($_SESSION["username"]))echo "<a href='admin/cancellation.php' target=_parent style='font-weight: bolder;color: #F00;float: right;'>注销</a><span style='float: right;'>&nbsp;&nbsp;&nbsp;</span><a href='admin/user_management.php' target=new style='font-weight: bolder;color: #F00;float: right;'>欢迎{$_SESSION["username"]}</a>";
else echo "<a href='admin/register.php' target=_self style='font-weight: bolder;color: #F00;float: right;'>注册</a><span style='float: right;'>&nbsp;&nbsp;&nbsp;</span><a href='admin/login.php' target=_self style='font-weight: bolder;color: #F00;float: right;'>登陆</a>";
?>
<br/><br/>
<div style="text-align: center;"><form method=post action=admin/search.php target="iframe_a"><input type="search" name=search list="search" placeholder="HTML+CSS" /><datalist id="search"><option value="javascript"><option value="oracle数据库"><option value="php7"><option value="Hadoop"></datalist><input type="submit" value="搜索"></form></div><br/>
<div class=title><a href="admin/recent.html" target="iframe_a">最新</a> <a href="recommendation.php" target="iframe_a">推荐</a> <a href="library.php" target=_blank>图书馆</a> <a href="admin/shopping_cart.php" target="new">购物车</a></div>
 <iframe name="iframe_a" src="recommendation.php"></iframe>

</body>
</html>
