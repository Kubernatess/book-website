
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册页面</title>
</head>
<link href="../css/register.css" rel="stylesheet" type="text/css">
<body>
<form action="register.php" method="GET" validate>
  <fieldset>
    <legend>Register</legend>
    <p>用户名*</p><input name=username type="text" required />
    <p>密码*</p><input name=password type="password" required />
    <p>确认密码*</p><input name=confirm type="password" required />
    <p>电话/手机号*</p><input name=telephone type="text" />
    <p>邮箱*</p><input name=email type="email" />
    <p>地址*</p>
    <textarea name=address style="width:90%;" cols=250 rows=5></textarea>
    <br/><br/>
    <input type="submit" name=submit value="提交"/><br/><br/>
  </fieldset>
</form>
</body>
</html>
<?php 
if(isset($_GET["submit"])&&($_GET["submit"]=="提交")){
     @$username=trim($_GET["username"]);
     @$password=$_GET["password"];
     @$confirm=$_GET["confirm"];
     if(!isset($_GET["telephone"]))$telephone=" ";
     else $telephone=$_GET["telephone"];
     if(!isset($_GET["email"]))$email=" ";
     else $email=$_GET["email"];
     if(!isset($_GET["address"]))$address=" ";
     else $address=trim($_GET["address"]);
     include 'conn.php';
     $sql="select username from user_information";
     $result=mysqli_query($conn,$sql);
     $n=mysqli_num_rows($result);
     $i=0;
     while($row=mysqli_fetch_assoc($result)){
         if($row[username]==$username)break;
         else $i++;
     }
     if($i<$n)echo "<script type='text/javascript'>alert('该用户名已经存在');history.go(-1);</script>";
     else{
         $length=strlen($password);
         if($length<6&&isset($password)) echo "<script type='text/javascript'>alert('密码不能少于6位');history.go(-1);</script>";   
         else {
         if($confirm!=$password)echo "<script type='text/javascript'>alert('密码不一致');history.go(-1);</script>";
         else {    
             $sql="insert into user_information values('".$username."','".$password."','".$telephone."','".$email."','".$address."')";
             if(isset($username)&&isset($password)){
             $result=mysqli_query($conn,$sql);  
             if(isset($result))echo "<script type='text/javascript'>alert('注册成功');history.go(-1);</script>";      
             //header("Location:login.php");
             }
           }
          }
     }    
}    
?>