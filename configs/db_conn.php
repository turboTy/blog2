<?php
// error_reporting('E_ALL^ E_NOTICE');
require_once ("configs.php");

//判断 "DB_HOST"是否定义成功
/* if(defined("DB_HOST")){
    echo "***";
} */

//连接数据库
$db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
if(mysqli_connect_errno()){
    die('连接数据库失败Error:'.mysqli_connect_errno().":".mysqli_connect_error());
}
mysqli_set_charset($db,DB_CHARSET);
?>