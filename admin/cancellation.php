<?php
session_start();
setcookie("username","",time()-60);
session_unset();
session_destroy();
header("Location:../index.php");
?>