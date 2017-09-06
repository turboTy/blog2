<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

require_once("./smarty/libs/Smarty.class.php");

require_once("./configs/db_conn.php");
require_once("libs/mysql.func.php");
require_once("./inc/global_params.php");

//sql_select_getonevalue("blog_users", "user_name", "id = '2'", $name);
//sql_select_get2value("blog_users", "user_name", "user_password", "id = '2'", $name, $password);
sql_leftjoin_getonevalue("blog_users a", "user_info b", "a.user_id = b.userid", "b.id = '1'", $array);

var_dump($array);
echo "<hr>";

















?>