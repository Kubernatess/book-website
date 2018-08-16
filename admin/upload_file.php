<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>上传文件</title>

<style type="text/css">
input[type=submit] {
	color: #FFF;
	background-color: #F00;
	border-style: none;
	height: 30px;
	width: 50px;
	border-radius: 8px;
	margin-left: 70px;
	
}
</style>
</head>

<body>
<form action='upload_file.php' method='post' enctype='multipart/form-data' validate>
<?php
session_start();
if((strcmp($_SESSION['username'],'admin')==0)&&(strcmp($_SESSION['password'],'502717')==0)){
  echo "<pre>";
  echo"    书名： <input type=text name=book_name size=40 placeholder='请输入书名' required /><br/>
    图片： <input type=file name=picture required /><br/>
    分类：<select name=sort><option value=3d_technology>3D技术</option><option value=backstage_development>后台开发</option>
	    <option value=operating_system>操作系统</option><option value=programming_language>程序设计语言</option>
	    <option value=electronic_technology>电子信息技术</option><option value=multimedia>多媒体</option>
	    <option value=others>其他</option><option value=front_end>前端技术</option>
	    <option value=network_technology>网络技术</option><option value=recommendation>推荐</option></select><br/>
   价格： <input type=number name=price size=40 placeholder='请输入书名价格' required /><br/>";
  echo "</pre>";
  echo "<input type=submit value=上传 name=upload>";
}
?>
</form>
</body>
</html>
<?php 
if(isset($_POST["upload"])&&($_POST["upload"]=="上传")){
    $book_name=trim($_POST["book_name"]);
    $price=$_POST["price"];
    $sort=$_POST["sort"];
    $path="../image/$sort/".$_FILES['picture']['name'];
    $dir=iconv("UTF-8","GB2312",$path);
    $result=0;
    if(!file_exists($dir)){
        move_uploaded_file($_FILES["picture"]["tmp_name"], $dir);
        include '../admin/conn.php';
        $result=mysqli_query($conn,"select * from $sort");    
        $maxRows=mysqli_num_rows($result);
        $nextRows=$maxRows+1;
        $sql="insert into $sort values('".$nextRows."','".$path."','".$book_name."','".$price."')";
        $result=mysqli_query($conn,$sql);
        if($result)echo "<script>alert('上传成功');</script>";    
    }
    else echo"<script>alert('该图片已经存在');</script>";
}
?>