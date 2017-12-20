<?php
/*error_reporting(E_ALL);
ini_set("display_errors",1); */

require_once("../../smarty/libs/Smarty.class.php");
require_once ("../../configs/db_conn.php");

//实例化Smarty模版
$t = new Smarty();

$t->setTemplateDir("./template");
$t->setCompileDir("./template_c"); 
$t->setCacheDir("./smarty_cache");

$t->setLeftDelimiter("{{");
$t->setRightDelimiter("}}");

$t->assign("css_path","../");  

$sql = "select * from admin_users";
$result = $db->query($sql);

if(!result)
{
    echo "ERROR:".$db->error;
    exit;
}

while ($row = $result->fetch_assoc())
{
    $row['user_role'] = $row['user_role'] == "9"?"超级管理员":"管理员";
    
    if(empty($row['phone']))
    {
        $row['phone'] = '无';
    }
    
    if(empty($row['email']))
    {
        $row['email'] = '无';
    }
    
    $adminArr[] = $row;
}
//var_dump($adminArr);
$t->assign("adminArr",$adminArr);





















$t->display("admin-list.html");

