<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

//require_once("../../smarttemplate/class.smarttemplate.php");
require_once("../../smarty/libs/Smarty.class.php");

/* $t = new SmartTemplate("test.html");
$t->template_dir = "./template";    //html模板路径
$t->temp_dir = "./template_c";  
$t->left_delimiter = '<{';
$t->right_delimiter = '}>'; */

$t = new Smarty();
$t->setTemplateDir("./template");
$t->setCompileDir("./template_c");
$t->setCacheDir("./smarty_cache");
$t->setLeftDelimiter("<{");
$t->setRightDelimiter("}>");

echo sha1(md5("test123"));

$arr = array(
    array("a"=>"是谁"),
    array("a"=>"广告"),
    array("a"=>"得到"),
    array("a"=>"鸿辉"),
    array("a"=>"卡卡","b"=>"点击"),
);

$t->assign("arr",$arr);

//$t->output();
$t->display("test.html");
