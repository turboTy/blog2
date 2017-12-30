<?php
// error_reporting(E_ERROR);
// ini_set("display_errors",1);
if(empty($_SESSION["admin_name"]))
{
    //echo "<script type='text/javascript'>alert('请先登录!')</script>";
    header("Location: ../../login.php");
}

?>






















