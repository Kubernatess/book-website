<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>search</title>
<style type="text/css">
ul {
	float: left;
	list-style-type: none;
}

img {
	height: 150px;
	width: 110px;
}
</style>
</head>
<body>
<?php
header("Content-Type: text/html; charset=utf8");
include 'conn.php';
$total=0;
$i=0;
function fun($sql){
    global $conn,$total,$i;
    $result=mysqli_query($conn,$sql);
    $total+=mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){
        if((stripos($row['name'],$_POST["search"])!==false)||(stripos($_POST["search"],$row['name'])!==false)){    echo "<ul>";
        echo "<li><img src=$row[path] /></li><br/>";
        echo "<li>$row[name]</li><br/>";
        echo "<li style=color:#F00;>￥$row[price]</li><br/>";
        echo "</ul>";
        }
        else $i++;
    }
}
fun("select * from 3d_technology");
fun("select * from backstage_development");
fun("select * from electronic_technology");
fun("select * from front_end");
fun("select * from multimedia");
fun("select * from network_technology");
fun("select * from operating_system");
fun("select * from others");
fun("select * from programming_language");
if($i>=$total)echo "抱歉,找不到你所要的商品";
?>
</body>
</html>