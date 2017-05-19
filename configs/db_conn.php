<?php
error_reporting('E_ALL^ E_NOTICE');
// include "../configs/configs.php";

//判断 "DB_HOST"是否定义成功
/* if(defined("DB_HOST")){
    echo "***";
} */

$db = new mysqli("localhost","root","sql845383047","blog");
// $db = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_DBNAME)
if (mysqli_connect_errno()){
    die('连接数据库失败Error:'.mysqli_connect_errno().":".mysqli_connect_error());
}
mysqli_set_charset($db,DB_CHARSET);
?>