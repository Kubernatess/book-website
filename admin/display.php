<?php
include 'conn.php';
function display($table_name){
    global $conn;
    $sql="select * from $table_name";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<ul>";
        echo "<li><img src=$row[path] /></li><br/>";
        echo "<li>$row[name]</li><br/>";
        echo "<li style=color:#F00;>￥$row[price]</li><br/>";
        $id=$row["id"];
        //$table_name="3d_technology";
        echo "<li><a href=../admin/shopping_cart.php?id={$id}&&table_name={$table_name} target=new><img src=../image/icon/timg2.jpg style=height:25px;width:25px;>加入购物车</a></li>";
        echo "</ul>";
    }
}

?>