<?php
/* error_reporting(E_ALL);
ini_set("display_errors",1); */

require_once ("../../smarttemplate/class.smarttemplate.php");
require_once ("../../configs/db_conn.php");

$t = new SmartTemplate("admin-list.html");
$t->template_dir = "./template";    //html模板路径
$t->temp_dir = "./template_c"; 
$t->left_delimiter = '<{';
$t->right_delimiter = '}>';

$t->output();
