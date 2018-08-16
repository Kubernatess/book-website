<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改密码</title>
</head>
<link href="../css/password_modify.css" rel="stylesheet" type="text/css">
<body>
<form action="" method="GET" validate>

输入旧密码：<input type="password" name="old_pwd" required /><br/>
设置新密码：<input type="password" name="new_pwd" required /><br/>
确认新密码：<input type="password" name="confirm_pwd" required /><br/>
<input name=submit type=submit value="确定">
<input type="button" value="返回" />
</form>
</body>
</html>
<?php 
session_start();
if(isset($_SESSION["username"])&&isset($_GET["submit"])&&($_GET["submit"]=="确定")){
    include 'conn.php';
    $sql="select * from user_information where username='".$_SESSION["username"]."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($_GET["old_pwd"]==@$row[password]){
        $length=strlen($_GET["new_pwd"]);
        if($length<6&&isset($_GET["new_pwd"])) echo "<script type='text/javascript'>alert('密码不能少于6位');history.go(-1);</script>";
            
        else {
            if(@$_GET["confirm_pwd"]!=$_GET["new_pwd"])echo "<script type='text/javascript'>alert('新密码不一致');history.go(-1);</script>";         
            else {
                include 'conn.php';
                $sql="update user_information set password='".$_GET["new_pwd"]."' where username='".$_SESSION["username"]."'";
                $result=mysqli_query($conn,$sql);
                if($result)echo "<script type='text/javascript'>alert('修改密码成功');</script>";
            }
        }
        
    }
    else echo "<script type='text/javascript'>alert('旧密码不正确');history.go(-1);</script>";
}
?>