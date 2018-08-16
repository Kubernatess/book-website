
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>recommendation</title>
</head>
<link href="css/recommendation.css" rel="stylesheet" type="text/css">
<body>
<?php
$pagesize=5;
include 'admin/conn.php';
$page=isset($_GET["page"])?$_GET['page']:1;
$result=mysqli_query($conn,"select * from recommendation");
$maxRows=mysqli_num_rows($result);
$maxPages=ceil($maxRows/$pagesize);
if($page>$maxPages){
    $page=$maxPages;
}
if($page<1){
    $page=1;
}
$sql="select * from recommendation order by id asc limit ".($page-1)*$pagesize.",$pagesize";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "<ul>";
    echo "<li><img src=$row[path] /></li><br/>";
    echo "<li>$row[name]</li><br/>";
    echo "<li style=color:#F00;>￥$row[price]</li><br/>";
    echo "</ul>";
    
}
echo "<div>";
echo "<a href=recommendation.php?page=1>首页</a>";
echo "<a href=recommendation.php?page=".($page-1).">上一页</a>";
echo "<a href=recommendation.php?page=".($page+1).">下一页</a>";
echo "<a href=recommendation.php?page={$maxPages}>尾页</a>";
echo "</div>";
?>

</body>
</html>
