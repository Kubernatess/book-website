<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆页面</title>
</head>
<link href="../css/login.css" rel="stylesheet" type="text/css">
<body>
<div id="div">
<form action="login.php" method="GET" validate>
<h1 style="color: #06F;
font-weight: normal;text-align: left;">用户登录</h1>
 用户名：<input type="text" name="username" style="width:200px;height:20px;" required /><br/><br/>密&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" style="width:200px;height:20px;" required />&nbsp;<a href="#" style="text-decoration: none;">忘记密码？</a><br/><br/>
<input type="submit" name="submit" value="登陆" />&nbsp;<a href="register.php" target="new" style="text-decoration: none;">免费注册</a>

</form>
</div>
</body>
</html>
<?php 
if(isset($_GET["submit"])&&($_GET["submit"]=="登陆")){
    include 'conn.php';
    $sql="select * from user_information";
    $obj=mysqli_query($conn,$sql);
    $length=mysqli_num_rows($obj);
    for($i=0;$i<$length;$i++){
        $row=mysqli_fetch_assoc($obj);
        if($row["username"]==$_GET["username"]){
            if($row["password"]==$_GET["password"]){            
            session_start();
            $_SESSION['username']=$_GET["username"];
            $_SESSION['password']=$_GET["password"];
            if((strcmp($_SESSION['username'],'admin')==0)&&(strcmp($_SESSION['password'],'502717')==0))
                header("Location:upload_file.php");
            else header("Location:../index.php");
            break;
            }
            else {
                echo "<script>alert('密码错误');</script>";
                break;
            }
        }
    }
    if($i==$length)echo "<script>alert('用户名不存在');</script>";
}
?>