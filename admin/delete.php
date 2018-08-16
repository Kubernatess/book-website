<?php
include 'conn.php';
$sql="delete from shopping_cart where id=$_GET[id]";
$result=mysqli_query($conn,$sql);
if($result)header("Location:shopping_cart.php");
?>