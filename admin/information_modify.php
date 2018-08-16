<?php

if(isset($_GET["telephone"])||isset($_GET["email"])||isset($_GET["address"])){
    session_start();
    include 'conn.php';
    $sql="select * from user_information";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if(!empty($_GET["telephone"]))$telephone=$_GET["telephone"];
    else @$telephone=$row[telephone];
    if(!empty($_GET["email"]))$email=$_GET["email"];
    else @$email=$row[email];
    if(!empty($_GET["address"]))$address=$_GET["address"];
    else @$address=$row[address];
    $sql="update user_information set telephone='".$telephone."',email='".$email."',address='".$address."' where username='".$_SESSION["username"]."'";
    $res=mysqli_query($conn,$sql);
    if($res)echo "<script>alert('保存成功');</script>";
    }
    ?>