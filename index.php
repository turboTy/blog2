<?php
/*error_reporting(E_ALL);
ini_set("display_errors",0);*/

require_once("smarttemplate/class.smarttemplate.php");

require_once("./configs/db_conn.php");
require_once("libs/mysql.func.php");
require_once("./inc/global_params.php");

//sql_select_getonevalue("blog_users", "user_name", "id = '2'", $name);
//sql_select_get2value("blog_users", "user_name", "user_password", "id = '2'", $name, $password);
sql_leftjoin_getonevalue("blog_users a", "user_info b", "a.user_id = b.userid", "b.id = '1'", $array);

add_option("id", "user_name", "blog_users", "1 order by id asc", "2", $value);

//var_dump($value);
//echo "<hr>";

$smart = new SmartTemplate("test.html");
$smart->template_dir = "./template";    //html模板路径
$smart->temp_dir = "./template_c";      


$smart->assign("array",$array);
$smart->assign("users",$value);


$smart->output();
















?>