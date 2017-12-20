<?php
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


$adminName = trim($_POST['adminName']);
$password = sha1(md5(trim($_POST['password'])));
$phone = trim($_POST['phone']);

if(isset($adminName) && $adminName != "")
{
    echo '{"stat":"1","text":"成功!!!"}';
    exit;
}
else
{
    echo '{"stat":"0","text":"失败!!!"}';
    
}













$t->display("admin-add.html");












