<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>shopping_cart</title>
</head>
<link href="../css/shopping_cart.css" rel="stylesheet" type="text/css">
<body>
<form action="delete.php" method="get">
<table border=0 >
<?php
session_start();
if(isset($_SESSION["username"])){
echo "<a href='cancellation.php' target=_parent style='font-weight: bolder;color: #F00;float: right;'>注销</a><span style='float: right;'>&nbsp;&nbsp;&nbsp;</span><a href='user_management.php' target=new style='font-weight: bolder;color: #F00;float: right;'>欢迎{$_SESSION["username"]}</a>";
include 'conn.php';
$object=mysqli_query($conn,"select * from shopping_cart");
    $i=0;
    while($row=mysqli_fetch_assoc($object)){
        //对shopping_cart表顺序排序
        $i++;
        mysqli_query($conn,"update shopping_cart set id=$i where id=$row[id]");
    } 
if(isset($_GET['id'])&&isset($_GET['table_name'])){
    $id=$_GET['id'];
    $table_name=$_GET['table_name'];
    static $sum=0;
    
    $sql="select * from $table_name where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    //把新加入进来的商品记录到购物车表
    $maxRows=mysqli_num_rows($object);
    $nextRows=$maxRows+1;
    @$sql2="insert into shopping_cart values('".$nextRows."','".$row[path]."','".$row[name]."','".$row[price]."')";
    mysqli_query($conn,$sql2);
}
    //把当前购物车所有商品列出来
    $result3=mysqli_query($conn,"select * from shopping_cart");
    while($row3=mysqli_fetch_assoc($result3)){
    echo "<tr><td rowspan=3><input name=$row3[id] type=checkbox  /></td><td rowspan=3><img src=$row3[path] /></td></tr>";
    echo "<tr><td>$row3[name]</td></tr>";
    echo "<tr><td style=color:#F00;>￥$row3[price]</td><td><a href=delete.php?id=$row3[id]>删除</a></td></tr>";
    @$sum=$sum+$row3[price];
    }

echo "</table>";
//结算  相当于提交表单

echo @"<input type=submit value='结算：￥{$sum}' />";
}
else echo "<a href='./register.php' target='new' style='font-weight: bolder;color: #F00;float: right;'>注册</a><span style='float: right;'>&nbsp;&nbsp;&nbsp;</span><a href='./login.php' target=new style='font-weight: bolder;color: #F00;float: right;'>登陆</a>";

?>
</form>
</body>
</html>
